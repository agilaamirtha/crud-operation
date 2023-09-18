<?php


$conn=mysqli_connect("localhost","root","","validation");
if(!$conn)
{
  echo "not connected";
}




//$subval=$_POST['submit'];


if(isset($_POST['submit'])   && $_POST['submit']=='insert' )
{
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

$sql = "INSERT INTO customer VALUES ('$username','$email','$password','$cpassword')";

$insert=mysqli_query($conn,$sql);


//print_r($insert);

if(!$insert)
{
  echo "error";
}else{ 
  echo "inserted";  
  //header("Location:form-crud-operation-display.php");
}

}elseif (isset($_POST['submit'])   && $_POST['submit']=='update' )

{
  
//$id=$_POST['id'];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];



$sql1 = "UPDATE customer SET username='$username', email='$email', password='$password',  cpassword='$cpassword' where id=  $id  ";

    $update=mysqli_query($conn,$sql1);
    
    if(!$update)
    {
      echo "error";
    }else{ 
      //echo "updated";  
      header('Location:form-crud-operation-display.php');
    }
}

?>

