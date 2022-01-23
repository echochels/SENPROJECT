function validate()
{
    var username=document.getElementById("username").value;
    var password=document.getElementById("pasword").value;
    if(username=="chelsea"&&password=="ajah")
{
    alert("login successfully");
    return false;
}
else{
    alert("login failed")
}
}