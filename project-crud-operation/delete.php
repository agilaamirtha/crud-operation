<?php

if(isset($_GET['id']))
{

$id=$_GET['id'];


$conn=mysqli_connect("localhost","root","","validation");
if(!$conn)
{
  echo "not connected";
}

$delete="DELETE FROM customer WHERE id='$id' ";

$res=mysqli_query($conn,$delete);

if($res)
{
    //echo "deleted";
    header('Location:fetch.php');
}
else 
echo " not deleted";

}
else{
    echo "value not come";
}
?>