<?php

class Connection {

    public static function make($config){
        try {
      
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'], 
                $config['pwd'],
                $config['options']
            );

          } catch (PDOException $e) {
             die($e->getMessage());
          }
    }
}