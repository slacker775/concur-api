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
            } else {
                $offset = null;
            }
        } while ($offset !== null);
    }

    abstract protected function executeMethod(Client $client, array $params);
}