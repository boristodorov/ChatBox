<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



include './config.php';

        $db->query('SELECT * FROM messages');
        
        $data = $db->get();
        
        foreach ($data as $key => $value){
            echo $value['message'] .'<br>';
        }