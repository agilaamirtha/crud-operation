

<?php

$conn=mysqli_connect("localhost","root","","validation");

if(!$conn)
{
  echo "not connected";
}

if(isset($_POST['name']))

{

$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];


$sql="insert into student (name,address,mobile) values('$name','$address','$mobile')";

$res=mysqli_query($conn,$sql);
 if($res){

    echo '<script>location.replace("index.php")    </script>';

    }
    echo "error";


}

?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>

<!-- cdn link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-9">



<div class="card" >
  <div class="card-header"><h1>student crud application</h1></div>
<div class="card-body">



            <form action="add.php"   method="POST">
            <div class="form-group">
            <label >name</label>
            <input type="text" class="form-control"  name="name"     placeholder="Enter name">
            </div>

            <div class="form-group">
            <label >address</label>
            <input type="text" class="form-control"   name="address"   placeholder="Enter address">
            </div>

            <div class="form-group">
            <label >mobile</label>
            <input type="text" class="form-control"    name="mobile"        placeholder="Enter mobile">
            </div><br>
           
            <input type="submit" class="btn btn-primary"   name="submit"  value="Add"></button>
            </form>





  </div>
 
</div>

 </div>



    </div>


</div>








</body>
</html>