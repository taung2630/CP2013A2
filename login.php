<?php
session_start();

?>


<script type="text/javascript">
function validateForm()

{
var x=document.forms["form1"]["username"].value;
var y=document.forms["form1"]["password"].value;

if (x==null || x=="")
  {
  alert("Username must not be blank");
  return false;
  }
else if (y==null || y=="")
  {
  alert("Password must not be blank");
  return false;
  
  }
}
 
function onChange(){

var x = document.getElementById("Cinema").value;
if (x==""){
	alert ("Cinema cannot be blank" + x);
	return false;	
	}
}
</script>


<?php
$url =  $_SERVER['REQUEST_URI'];

if ($_REQUEST['submitcinema']== "Select"){
	echo '<meta http-equiv="refresh" content="0;URL='.$url.'" />';
$_SESSION['CinemaNo']=$_REQUEST['CinemaNo'] ;
}
$cinemaform = '<p><center><h3>Select Cinema </h3></p>
	 <form action="'.$url.'" name="cinemaform" method="post" onsubmit="return onChange();">
	 <p><select name="CinemaNo" onchange="return onChange()"  id="Cinema">
	 <option value="" ></option>
	 <option value="Downtown Cinema" >Downtown Cinema</option>
	 <option value="Jurong Cinema">Jurong Cinema</option>
	 <option value="AMK Cinema" >AMK Cinema</option></select>
	 <input type="submit" name="submitcinema" value="Select"/></form>';

if ($_SESSION['login']=="2"){
	$username = $_SESSION["username"];
	echo '<center><h3>Welcome </h3></center>
	<center><h3>'.$username.'</h3></center>
	 <center><a href="adminUI.php">View AdminUI</a></center><br />
	 <center><a href="logout.php">Logout</a></center></p>'.$cinemaform.'';  
	echo '<h3>'.$_SESSION['CinemaNo'].'</h3>';
;

}
elseif ($_SESSION['login']=="1"){
	$username = $_SESSION["username"];
	echo '<center><h3>Welcome </h3></center>
	<center><h3>'.$username.'</h3></center>
	 <center><a href="usersecure.php">View Account</a></center><br />
	 <center><a href="logout.php">Logout</a></center></p>'.$cinemaform.'';
	  
echo '<h3>'.$_SESSION['CinemaNo'].'</h3>';
}

else{
echo '<p>
<form action="secure.php" name="form1" method="post" onsubmit="return validateForm();">
<label>Username:
<input type="text" name="username"/>
</label>

<label>Password: <input type="password" name="password" />
</label>
</p>
<p><center>
<input type="submit" name="Submit" value="Login"/>
<input type="reset" name="Reset" value="Reset"/>
</center>
</p></form>';
echo "<p>Don't have an account?</p> 
<p> <a href='register.php'> <strong>Create an account here..</strong></a></p>";  


}

?>

