<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 25/05/2018
 * Time: 19:42
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
