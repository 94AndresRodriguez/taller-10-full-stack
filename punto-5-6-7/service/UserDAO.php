<?php
 include "connection.php";
 
 function getAllUsers() {
   return mysqli_query(CONNECTION, "SELECT * FROM usuarios");

 function getUserByIdNumber($idNumber){
    return mysqli_query(CONNECTION, "SELECT * FROM usuarios WHERE cedula = $idNumber");
  }
 }

 // SELECT --> GET -- trae datos
 // INSERT --> POST -- envia datos
 // UPDATE --> PUT -- actualiza datos
 // DELETE --> DELETE -- elimina datos

 // print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>