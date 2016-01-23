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
       $this->db =  mysql_connect($host,$user,$pass,$db_name);
        if (!$this->db)
        {
            exit('No connection');
        }

        if (!mysql_select_db($db_name,$this->db)){
            exit('No table');
        }

        mysql_query('SET NAMES utf-8');

        return $this->db;
    }

    public function get_all_from_db(){
        $sql = 'SELECT id, title, post from statii limit 10';

        $res = mysql_query($sql);

        if(!$res){
            return false;
        }

        for ($i = 0; $i < mysql_num_rows($res); $i++){
            $row[] = mysql_fetch_array($res,MYSQL_ASSOC);
        }

        return $row;
    }
    public function get_one_from_db(){

    }
}