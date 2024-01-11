const userClk = document.querySelector("#userbox"),
adminClk = document.querySelector("#adminbox");

userClk.addEventListener("click",function(){
    location.href="UserLogin.html";
});

adminClk.addEventListener("click",function(){
    location.href="Login.html";
})
