<?php
try {
    $bd= new PDO('mysql:host=localhost;dbname=formdb', 'root','');

	}catch (Exception $e){
        die ($e->getMessage());
    }
?>