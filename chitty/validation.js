//$(document).read(function()
//{
$("submit").on("click",function Validity()
{
var exp_email=/^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
var exp_phone=/^[0-9]{9,12}$/;
$email=$('email).val();
$phone=$('phno).val();	
if(!exp_email.test($email))
{
alert("invalid email");
return false;
}
else if(!exp_phone.test($phone))
{
alert("enter 10 numbers");
return false;
}
else
{
return true;
}
});
