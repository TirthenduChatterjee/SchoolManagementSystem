var logout = document.getElementById("logout");
logout.addEventListener("click",function(e){
    let a = confirm("Are you sure you want to leave this page?");
    if(a==true){
        location.href="Home1.html";
    }
});