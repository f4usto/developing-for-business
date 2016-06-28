<?php

namespace Develop\Business\Application\Wishlist\Tests\Repositories\Stubs;

class WriteFailureStatementStub extends \PDOStatement
{
    public function setFetchMode($mode, $params = null)
    {
    }

    public function execute($input_parameters = [])
    {
        throw new \PDOException();
    }
}
