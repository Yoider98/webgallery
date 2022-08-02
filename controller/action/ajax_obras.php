<?php 
 session_start();
 require_once(__DIR__."/../mdb/mdbObra.php");
 $obra= verObra();
 echo json_encode($obra);