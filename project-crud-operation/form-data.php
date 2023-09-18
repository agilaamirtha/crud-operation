

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

</style>





<form  onsubmit="return formValidation()"    action="insert.php"  method="POST" >

<table class="dbresult">
<thead>
  <tr>
    <th colspan="3" >User Details</th>
</tr>
</thead>

<tbody>
    <tr>
        <td>username</td>
        <td><input type="text"  id="username"   name="username" required=""  /></td>
    </tr>

    <tr>
        <td>email</td>
        <td><input type="text"  id="email"   name="email"  required="" /></td>
    </tr>


    <tr>
        <td>password</td>
        <td><input type="text"  id="password"   name="password"  required="" /></td>
    </tr>

    <tr>
        <td>cpassword</td>
        <td><input type="text"  id="cpassword"   name="cpassword"  required="" /></td>
    </tr>

<tr>
    <td colspan="1" style="text-align:center; margin-left:10px;">   </td>
    <td><input type="submit"    name="submitValue" value="insert" required="" /></td>
</tr>
<tr>
<td colspan="2">    
<a href="fetch.php">View Records</a></tr></td>
</tbody>

</table>
</form>


<script>

function formValidation(){
var username=document.getElementyId("username");
var email=document.getElementyId("email");
var password=document.getElementyId("password");
var cpassword=document.getElementyId("cpassword");


if(username.value=="")
{
    alert("username field is empty");
    username.style.borderColor="red";
    return false;
}else{
    username.style.borderColor="";
}


if(email.value=="")
{
    alert("email field is empty");
    email.style.borderColor="red";
    return false;
}else{
    email.style.borderColor="";
}

if(password.value=="")
{
    alert("password field is empty");
    password.style.borderColor="red";
    return false;
}else{
    password.style.borderColor="";
}

if(cpassword.value=="")
{
    alert("cpassword field is empty");
    cpassword.style.borderColor="red";
    return false;
}else{
    cpassword.style.borderColor="";
}


}

</script>