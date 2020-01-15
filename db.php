<?php

function Createdb(){
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="abes";

  //create connection
  $con=mysqli_connect($servername,$username,$password);

  //check connection
  if(!$con){
    die("connection failed:".mysqli_connect_error());
  }
  //create database
  $sql="CREATE DATABASE IF NOT EXISTS $dbname";

  if(mysqli_query($con,$sql)){
    $con=mysqli_connect($servername,$username,$password,$dbname);

    $sql="
    CREATE TABLE IF NOT EXISTS department(id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
    dep_name VARCHAR(25) NOT NULL);
    ";

    if(mysqli_query($con,$sql)){
      return $con;
    }else{
      echo "table not created..!";
    }
  }else{
    echo "Error while creating database ".mysqli_error($con);
  }
}
