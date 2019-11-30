<?php
declare(strict_types = 1);

namespace Concur\Iterator;

use League\Uri\QueryParser;
use League\Uri\Uri;
use Concur\Api\Client;

abstract class AbstractIterator
{

    final public function foreach(Client $client, array $params = [])
    {
        $queryParser = new QueryParser();
        $offset = null;
        do {
            printf("Executing iteration with offset: %s\n", $offset);
            if ($offset !== null) {
                $params = [
                    'offset' => $offset
                ];
            }
            $collection = $this->executeMethod($client, $params);
            foreach ($collection->getItems() as $item) {
                yield $item;
            }
            $nextPage = $collection->getNextPage();
            if ($nextPage !== null) {
                $uri = Uri::createFromString($nextPage);
                $query = $queryParser->parse($uri->getQuery());
                $offset = $query['offset'];
                printf("OFFSET: %s\n", $offset);
            } else {
                printf("NO OFFSET, end of items\n");
                $offset = null;
            }
        } while ($offset !== null);
    }

    abstract protected function executeMethod(Client $client, array $params);
}