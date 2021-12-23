function validate() 
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if(username=="admin" && password=="12345") {
        return true;
    }
    else {
        alert("Sai mật khẩu!");
        return false;
    }
}