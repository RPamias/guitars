<?php

 class DataBase {
    //  public static function connect($host = 'localhost', $user = 'root', $pwd = '', $db = 'guitars') {
    //      $con = new mysqli($host, $user, $pwd, $db);
        
    //      if ($con == false) {
    //          die('Error en la base de datos');
    //      } else {
    //          return $con;
    //      }
    //  }

     public static function connect($host = 'sql311.infinityfree.com', $user = 'if0_35796584', $pwd = 'tXz0zPoURSn8T', $db = 'if0_35796584_guitars') {
                $con = new mysqli($host, $user, $pwd, $db);
                
                if ($con == false) {
                    die('Error en la base de datos');
                } else {
                    return $con;
                }
            }
 }
