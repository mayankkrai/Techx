<?php
require_once("db.php");

$con=Createdb();

if(isset($_POST['create'])){
    createData();
}
if(isset($_POST['delete'])){
  deleteRecord();
}



function createData(){
  $depname=textboxValue("dep_name");

  if($depname){
    $sql="INSERT INTO department(dep_name)
    VALUES('$depname')";
    if(mysqli_query($GLOBALS['con'],$sql)){
      echo "record successfully inserted..!";
    }else{
      echo "error";
    }
  }else{
    TextNode("success","Provide data in the textbox");
  }
}

function textboxValue($value){
  $textbox=mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
  if(empty($textbox)){
    return false;
  }else {
    return $textbox;
  }
}
//message
function TextNode($classname,$msg){
  $element="<h6 class='$classname'>$msg</h6>";
  echo $element;
}

//get data from mysql database
function getData(){
  $sql="SELECT * FROM department";
  $result=mysqli_query($GLOBALS['con'],$sql);

  if(mysqli_num_rows($result)>0){
    
      return $result;
    }
  }

  function deleteRecord(){
    
$sql="DELETE FROM department WHERE id='$id'";
if(mysqli_query($GLOBALS['con'],$sql)){
  TextNode("success","record deleted successfully");

}else{
  TextNode("error","ERROR");
}
  }

?>