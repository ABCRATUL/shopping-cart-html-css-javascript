function validate()
{
var username=document.getElementById('username');
var password=document.getElementById('password');
if(username=="" && password=="")
{
    alert ("Please enter your credentials");
}
else if (username=="" || password=="")
{
    alert ("Please enter your username/password");
}
}