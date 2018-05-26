<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 */
class Parada
{
    private $parada_data;

    public function __construct($data)
    {
        $this->parada_data = $data;
    }

    public function get_data()
    {
        return $this->parada_data;
    }
}
