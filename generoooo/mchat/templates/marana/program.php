<html>
<head>
<title>maranatha</title>
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
<script type="text/javascript">
function validateForm()
{
var x=document.forms["sform"]["sname"].value;
if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }
  var x=document.forms["sform"]["eaddress"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

}
</script>
</head>
<body background=BAC.jpg>
<table width=100% height=100% cellspacing=0 cellpadding=0>
	<tr><td colspan=2 height=30% class=banner></td></tr>
	<tr><td colspan=2 class=menu height=30%>
	<div id="nav">
	<ul>
    <li><a href="file:///F:/web/marana.html">HOME</a></li>
    <li><a href="#">Programs</a>
		<ul>
            <li><a href="film.html">Films</a>
				<ul>
				<li><a href="fmaking.html">Film Making</a></li>
				<li><a href="dfmaking.html">Digital FilmMaking</a></li>
				<li><a href="mvideo.html">Music Video</a></li>
				</ul>
				</li>
            <li><a href="prod.html">Producing</a></li>
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
            
	<li><a href="file:///C:/Users/user/Desktop/bannersimage/web/program.html">Registration</a></li>
	<li><a href="#">About US</a></li>
	<li><a href="file:///C:/Users/user/Desktop/bannersimage/web/contactUs.html">Contact US</a>
    
	<li><a href="#">Chat&Forum</a>
        <ul>
            <li><a href="Contact.html">Contact Us</a></li>
            <li><a href="#">Facebook <span class="right-arrow">&#9658;</span></a>
                <ul>
                    <li><a href="#">Like Us</a></li>
                </ul></li>
			</ul>
	<li><a href="file:///C:/Users/user/Desktop/bannersimage/web/mee.html">Academics</a></li>
	</div>
	</td></tr>
	<tr>
	<td colspan=2>
	<table  height=65% border=1>
	<tr>
	<td class=sidebar width=30%>
	<table>
	<tr><th colspan=2><font color=orange><u>Testimonies</u></font></th></tr>
	<tr><td colspan=2><img width=30% height=10% src=test.jpg></td></tr>
	<tr><td colspan=2>Maranatha Institute help me with to achieve my goals. The institute is the best, as they offer the best teaching techniques and sound syllabus</td></tr>
	<tr><td colspan=2><img width=30% height=25% src=test2.jpg></td></tr>
	<tr><td colspan=2>Maranatha Institute is the best institute around here. I have develop geometrically under their tutelage</td></tr>
	</table>
	</td>
	<td class=content>
	<table height=45% width=40%>
	<tr><td>
	<table border=0>
<form method=post name=sform action=mstdform.php>
	<tr><td colspan=2><h2><font color=orange><center> Student Registration Form</center></font></h2></td></tr>
<tr><td>Name<td><input type=text name=sname value="" size=20 maxlength=20> eg. Will Smith J</td></td></tr>
<tr><td>Address<td><Textarea name=addr value="" cols=15 rows=2 maxlength=200></textarea></td></td></tr>
<tr><td>Mobile No<td><input type=text name=mob value="" size=20 maxlength=10> eg. 6524******</td></td></tr>
<tr><td>Email Address<td><input type=text name=eaddress value="" size=20 maxlength=20> eg. abc@gmail.com</td></td></tr>
<tr><td>Gender<td><input type=radio name=pop value="" >Male<input type=radio value="" >Female</td></td></tr>
<tr><td>Age<td><input type=text name=age value="" size=20 maxlength=2> eg.14years</td></td></tr>
<tr><td>City<td><input type=text name=city value="" size=20 maxlength=10> eg.New York</td></td></tr>
<tr><td>Nationality<td><input type=text name=country value="" size=20 maxlength=10>eg.US</td></td></tr>
<tr><td>Pin Code<td><input type=text name=pcode value="" size=20 maxlength=6> eg.56700</td></td></tr>
<tr><td>Qualification<td><input type=radio name=qua value="" maxlength=20>Sec<input type=radio name=qua value="" maxlenght=20>UG<input type=radio name=qua value="" maxlength=20>PG</td></td>
</tr>
<tr><td>Select Course<td><select name=course>
<option value=--select opt-->--select Opt--</option>
<option value=film making>film making</option>
<option value=Digital film making> digital film making</option>
<option value=music video>music video</option>
<option value=producing photography>Producing photography</option>
<option value=3D Animation>3D Animation</option>
<option value=Cinematography>Cinematography</option>
<option value=ACCP>ACCP</option>
<option value=cloud computing>Cloud Computing</option>
<option value=windows store app dev>windows store appdev</option>
<option value=C>C</option>
<option value=C++>C++</option>
<option value=C#>C#</option>
<option value=.Net>.Net</option>
<option value=IT Booster>IT Booster</option>
<option value=Oracle>Oracle</option></td></td></tr>
<tr><td>Enter your queries<td><textarea name=query rows=2 cols=15></textarea></td></td></tr>
<tr><td colspan=2><center><input type=submit name=submit value=submit onClick="validateForm();"><input type=reset value=Cancel name=reset></center></td></tr></form>
<tr><td><table><marquee direction=left color=white width=100% height=10%><font color=white>  At Maranatha Institute your convienence is our priority</font></table></marquee></td></tr>
	
</table>
	</td>
	
</table>
</td>
<tr><td colspan=2 class=bottom><center>&copy copyright reserved by samuel and amusan</center></td></tr>
</body>
</html>                                                                                                                                                                                                                                                                               