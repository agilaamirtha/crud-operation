
<?php
if(isset($_GET['id'])){



?>
<style>


.dbresult, .dbresult th , .dbresult td{

border:ipx solid black;
border-collapse:collapse;
padding:8px;
font-family:sans-serif;
background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);

/* 
margin-left:40px;
margin-top:50px */
}
.dbresult{
    margin:auto;
}
.dbresult  input{
    padding :10px  20px;
    font-weight:bold;

}
.dbresult tr:nth-child(odd){
    background-color:#eeaeca;
}

.dbresult tr:nth-child(even){
    background-color:#94bbe9;
}
</style>

<?php    



$conn=mysqli_connect("localhost","root","","validation");

if(!$conn)
{
  echo "not connected";
}

$id=$_GET['id'];

$display="SELECT id,username, email, password, cpassword FROM customer where id=$id ";

$result=mysqli_query($conn,$display);
$numrow=mysqli_num_rows($result);
if($numrow ==1){

$row=mysqli_fetch_assoc($result); //print_r( $row);


?>



<form action="insert.php"  method="POST" >

<input type="hidden"  name="id" value="<?=$id?>"/>

<table class="dbresult">
<thead>
  <tr>
    <th colspan="3" > Update Records</th>
</tr>
</thead>

<tbody>
    <tr>
        <td>username</td>
        <td><input type="text"    name="username" value="<?=$row['username']?>" required="" /></td>
    </tr>

    <tr>
        <td>email</td>
        <td><input type="text"    name="email" value="<?=$row['email']?>" required="" /></td>
    </tr>


    <tr>
        <td>password</td>
        <td><input type="text"    name="password" value="<?=$row['password']?>"  required="" /></td>
    </tr>

    <tr>
        <td>cpassword</td>
        <td><input type="text"    name="cpassword" value="<?=$row['cpassword']?>"required="" /></td>
    </tr>

<tr>
    <td colspan="1" style="text-align:center; margin-left:10px;">   </td>
    <td><input type="submit"    name="submitValue" value="update" required="" /></td>
</tr>
<tr>
<td colspan="2">    
<a href="fetch.php">View Records</a></tr></td>
</tbody>

</table>
</form>

<?php }
else{
  echo "record not found";
}


}else{
  echo 'you are not alloewed';
}



?>
