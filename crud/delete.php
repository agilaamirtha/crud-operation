<?php

$conn=mysqli_connect("localhost","root","","validation");

if(!$conn)
{
  echo "not connected";
}
$delete=$_GET['delete']; 

$sql="delete from student where id='$delete'";



// $res=mysqli_query($conn,$sql);
// echo $res;

// if($res){

//     echo '<script>location.replace("index.php")    </script>';

//     }
//     echo "error";

if(mysqli_query($conn,$sql)){

    echo '<script>location.replace("index.php")    </script>';

    }
    echo "error";





?>



