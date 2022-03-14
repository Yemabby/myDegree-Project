function validateForm()
{
function validateName()
{
var x=document.forms["sform"]["sname"].value;
if (x==null || x=="" || x== /^[0-9]+$/)
  {
  alert("Enter proper value");
  return false;
  }

}
function validateAddress()
{
var a = document.sform.addr.value;
if(a=="")
{
alert("please Enter the details");
document.sform.addr.focus();
return false;
}
if((a.length < 20) || (a.length > 100))
{
alert(" Your textarea must be 20 to 100 characters");
document.sform.addr.select();
return false;
}
}
 
 function validateEmail() {

   var x=document.forms["sform"]["eaddress"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}