<?php
declare(strict_types = 1);

namespace Concur\Iterator;

use Concur\Api\Client;

class ExpenseReceiptImageIterator extends AbstractIterator
{

    protected function executeMethod(Client $client, array $params)
    {
        return $client->getExpenseReceiptimage($params);
    }
}