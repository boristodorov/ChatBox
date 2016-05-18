<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$config = array();
        $config['host'] = 'localhost';
        $config['user'] = 'root';
        $config['pass'] = '';
        $config['table'] = 'messages';
         // Then simply connect to your DB this way:
        
         include './mysqli.class.php';        
        $db = new DB($config);
        