<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 25/05/2018
 * Time: 19:48
 */

include ('Parada.php');
include ('DataBase.php');

class ParadaFactory
{
    public static function create()
    {

        $conn = new DataBase();

        $d = new DateTime();
        $data= $d->format('d:m:Y H:i:s');

        $conn->insereParada($data);
        return new Parada($data);
    }

}