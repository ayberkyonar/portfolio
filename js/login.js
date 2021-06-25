function Login() {   //login function if you login as a student you go to another tab then as a teacher
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
        window.location.href="docentpage.html";
        return false;
    }
    else{
        alert("Probeer het opnieuw.");
    }
}