<?php


namespace zone\InterfaceModel;


interface InterfaceModel
{
    /**
     * @param array $data
     * @return mixed
     */
    public function where(array $data);

    /**
     * @param int $number
     * @return mixed
     */
    public function limit(int $number);

    /**
     * @param string $orderBy
     * @return mixed
     */
    public function orderBy(string $orderBy);
}