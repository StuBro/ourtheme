<?php
/**
 * Created by PhpStorm.
 * User: khalil
 * Date: 23/07/17
 * Time: 18:00
 */


namespace database;

use \PDO;
use PDOException;

class connection
{


    private $host = 'localhost';
    private $db   = 'kh_repo' ;
    private $user      = 'root';
    private $pass  = 'root';
    private static $conn = null;
    /**
     * @param $host_name
     * @param $db
     * @param $host_u
     * @param $host_u_pass
     */
    public function conn($host, $db, $user, $pass)
    {

//        $this->_host_name = $host_name;
//        $this->_db_name = $db;
//        $this->_user = $host_u;
//        $this->user_pass = $host_u_pass;

        $dsn = "mysql:host=$host;db_name=$db;";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false
        ];



            self::$conn = new PDO($dsn,$user,$pass,$opt);



    }

    /**
     * @return null
     */
    public function disconnect()
    {

        if (self::$conn !== null):
            self::$conn = null;

            return true;
        else:
            return false;
        endif;

    }

    public function check_tabel($table)
    {

      $query = "SELECT 1 FROM $table LIMT 1";
      self::conn();
      print_r(self::$conn);


    }

    public function insert_data($tabel,$values)
    {


    }


}




