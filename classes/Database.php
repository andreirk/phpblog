<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 10.01.2016
 * Time: 21:33
 */

namespace phpblog;


class Database
{
    public $db;

    public function __construct($host,$user,$pass,$db_name)
    {
       $this->db =  mysqli_connect($host,$user,$pass,$db_name);
        if (!$this->db)
        {
            exit('No connection');
        }

        mysqli_query('SET NAMES utf-8');

        return $this->db;
    }

    public function get_all_from_db(){

    }

    public function get_one_from_db(){

    }
}