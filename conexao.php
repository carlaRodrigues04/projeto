<?php

$conexao = mysqli_connect("localhost", "root", "", "projeto");

if(!$conexao){
  echo "erro".mysqli_connect_error();
}

?>