<?php



$conn=mysqli_connect("localhost","root","","validation");

if(!$conn)
{
  echo "not connected";
}


//print_r($_GET);
if(isset($_POST['submitValue'])  && $_POST['submitValue']=='insert') 
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];





$sql = "INSERT INTO customer(username,email,password,cpassword)  VALUES ('$username','$email','$password','$cpassword')";
$insert=mysqli_query($conn,$sql);


if(!$insert)
{
  echo "error";
}else{ 
  //echo 'inserted.<a href="form-data.php"> Go Back</a>'; 
  header('Location:form-data.php');
}


}
elseif (isset($_POST['submitValue'])   && $_POST['submitValue']=='update' )

{
  
$id=$_POST['id'];
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
      header('Location:fetch.php');
    }
}




?>