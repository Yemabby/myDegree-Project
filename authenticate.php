<html>
<head>
<title>maranatha</title>

<?php
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="maranatha"; // Database name 
$tbl_name="adminlog"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
mysql_select_db("$db_name") or die(mysql_error());
// Check $username and $password 
/*
if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}
*/

// Define $username and $password 
$username=$_POST['uname']; 
$password=$_POST['pwd'];


$sql="SELECT * FROM $tbl_name WHERE uname='$username' and pwd='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    echo "Login Successful! $count";
} else {
	  echo "Unsuccessful! $count";
	}

ob_end_flush();
?>


<style type="text/css">
body{
background:url('.jpg')
	}
.banner{
	background:url('maranaata.jpg');
	width:100%;
	height:161px
	}
.sidebar{
	color:blue;
	width:20%;
	height:70%;
	background-color:#005274
	}
.mcontent{
	width:90%;
	height:100%;
	background-color:white
	}
.content{
	color:white;
	width:80%;
	height:70%;
	background-color:#909989
	}
.bottom{
	color:orange;
	height:5%;
	width:100%;
	background-color:#000010
	}
.menu{
display:inline;
width:100%;
height:50px;
margin-left: 40px;
color: #fff1343;
}
li{
    margin-left: 20px;
}
.clear{
clear:both;
}
#nav {
    font-family: verdana;
    font-weight: bold;
    font-size: 9pt;
}
  
#nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
  
#nav a:link,
#nav a:visited {
    color: #ffffff;
    text-decoration: none;
}
  
#nav a {
    display: block;
    padding: 6px 8px;
}
  
#nav li {
    float: left;
    background-color: #000000;
    margin-right: 1px;
    position: relative;
    border-radius: 5px;
}
 
#nav li li{
    width: 160px;
    margin-top: 1px;
}
 
#nav li:hover {
    background-color: #555555;
}
#nav li li:hover {
    background-color: #757575;
}  
 
  
#nav ul ul  {
    position: absolute;
    visibility: hidden;
}
  
#nav ul ul ul{
    position: absolute;
    left: 100%;
    top: -2px;
    border: solid 1px transparent;
} 
 
#nav li:hover > ul {
    visibility: visible;
}
  
.right-arrow {
    float: right;
}
</style>
</head>
<body background=BAC.jpg>
<table width=100% height=100% cellspacing=0 cellpadding=0>
	<tr><td colspan=2 height=30% class=banner></td></tr>
	<tr><td colspan=2 class=menu>
	<div id="nav">
	<ul>
    <li><a href="marana.html">HOME</a></li>
    <li><a href="Program.html">Programs</a>
		<ul>
            <li><a href="film.html">Films</a>
				<ul>
				<li><a href="film.html">Film Making</a></li>
				<li><a href="film.html">Digital FilmMaking</a></li>
				<li><a href="film.html">Music Video</a></li>
				</ul>
				</li>
            <li><a href="Producing.html">Producing</a></li>
            <li><a href="photo.html">Photography</a></li>
            <li><a href="3D.html">3D Animation</a></li>
			<li><a href="cinema.html">Cinematography</a></li>
			<li><a href="Dediting.html">Digital Editing</a></li>
			<li><a href="Beginner.html">Beginner</a>
				<ul>
				<li><a href="ACCP.html">ACCP</a></li>
				<li><a href="CComputing.html">Cloud Computing</a></li>
				<li><a href="WindowsApp.html">Windows Apps</a></li>
				<li><a href="CC++.html">C & C++</a></li>
				<li><a href="Java.html">Java</a></li>
				<li><a href="Net.html">.NET</a></li>
				<li><a href="DBase.html">Database Courses</a></li>
				</ul>
				</li>
			
		</ul></li>
            
	<li><a href="registration.html">Registration</a></li>
	<li><a href="AboutUs.html">About US</a></li>
	<li><a href="contactUs.html">Contact US</a>
    
	<li><a href="#">Chat&Forum </a>
    <li><a href="#">Academics</a>
	<ul>
		<li><a href="studentAt.html">Student Attendance</a></li>
		<li><a href="studentRes.html">Student Result</a></li>
		<li><a href="Admin.html">Administrator</a></li>
		</ul>
		</li>
		</div>
	</td></tr>
<tr><td name=content colspan=2>
<center><h2>login Successful</h2></center>
<table align=center>
<tr><td><a href=StudentD.html>Click Here to Check Student Details</a><td></tr>
<tr><td><a href=attend.php>Click Here to Update Student Attendance</a><td></tr>
<tr><td><a href=uptda.html>Click Here to Upload Student Result</a><td></tr>
</table>

</td></tr>
<tr><td colspan=2 class=bottom><center>&copy copyright reserved by samuel and amusan</center></td></tr>
</table>
</body>
</html>

