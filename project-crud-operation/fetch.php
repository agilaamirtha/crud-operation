<?php

$conn=mysqli_connect("localhost","root","","validation");

if(!$conn)
{
  echo "not connected";
}

$display="SELECT username, email, password, cpassword,id FROM customer";

$result=mysqli_query($conn,$display);
$numrow=mysqli_num_rows($result);
if($numrow>0)
{



    echo '<table class="dbresult">';
 
     echo '<tr>
    
  
     <th>username</th>
     <th>email</th>
     <th>password</th>
     <th>cpassword</th>
     <th>id</id>
    <th>delete</th>
    <th>update</th>
    
     </tr>';

    while($row= mysqli_fetch_assoc($result))
    {
        $id=$row['id'];
        echo'<tr>
                      
                        <td>'.$row['username'].'</td> 
                      <td>'.$row['email'].'</td>
                      <td>'.$row['password'].'</td>
                      <td>'.$row['cpassword'].'</td>
                      <td>'.$row['id'].'</td>
                     <td><a href="delete.php?id='.$id.'" onClick="return confirm(\'are you sure to delete this record?\')">delete</a></td>;
                     <td><a href="update-form.php?id='.$id.' ">update</a></td>;

                       </tr>';
       
       
                }
    '</table>';
}
else {
    echo 'record not found <a href="form-data.php">GO BAck</a>';
     
}

?>


