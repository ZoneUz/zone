<?php


namespace zone\model;


use zone\InterfaceModel\InterfaceModel;

class userModel implements InterfaceModel
{
    private $tableName = "action";
    /**
     * @inheritDoc
     */
    public function where(array $data)
    {
        // TODO: Implement where() method.
    }

    /**
     * @inheritDoc
     */
    public function limit(int $number)
    {
        // TODO: Implement limit() method.
    }

    /**
     * @inheritDoc
     */
    public function orderBy(string $orderBy)
    {
        // TODO: Implement orderBy() method.
    }
}