function Login() {
    let site = document.querySelector(".site")
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    if(username=="student" && password=="rocmondriaan")
    {
        window.location.href="homepage.html";
        return false;
    }
    else if(username=="docent" && password=="rocmondriaan")
    {
        window.location.href="homepage.html";
        return false;
    }
    else{
        alert("Probeer het opnieuw.");
    }
}