// localStorage.setItem("name-1","Biswarup Dutta");
// localStorage.setItem("duttabiswarup2003@gmail.com","12345@");
// localStorage.setItem("saikatdam327@gmail.com","12345@");
// localStorage.setItem("tirtho1504@gmail.com","12345@");
// localStorage.setItem("jeetpatra987@gmail.com","12345@");


const formContainer = document.querySelector(".form_container"),
formCloseBtn = document.querySelector(".form_close"),
// signupBtn = document.querySelector("#signup"),
// loginBtn = document.querySelector("#login"),
pwShowHide = document.querySelectorAll(".pw_hide");


formCloseBtn.addEventListener("click", function(){
    let a = confirm("Are you sure you want to leave this page?");
    if(a==true){
    location.href="Home.html";
    }
});

pwShowHide.forEach((icon) => {
    icon.addEventListener("click",() => {
        let getPwInput = icon.parentElement.querySelector("input");
        if(getPwInput.type === "password"){
            getPwInput.type = "text";
            icon.classList.replace("fa-eye-slash","fa-eye");
        }else{
            getPwInput.type = "password";
            icon.classList.replace("fa-eye","fa-eye-slash");
        }
    });
});
// signupBtn.addEventListener("click",(e)=>{
//     e.preventDefault();
//     formContainer.classList.add("active");
// });

// loginBtn.addEventListener("click",(e)=>{
//     e.preventDefault();
//     formContainer.classList.remove("active");
// });

const loginInfo = document.querySelector("#loginid");
loginInfo.addEventListener("click",function login2(){
    var flag = false;
    var email2 = document.getElementById("email").value;
    var password = document.getElementById("pass").value;

    // var email1 = localStorage.getItem("email-1");
    // var pass1 = localStorage.getItem("password-1");
    
    // if(email2==email1 && password==pass1){
    //     location.href="https://codewithharry.com";
    // }
    // else{
    //     alert("Email or password entered is incorrect.");
    // }
    for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        // console.log(`${key}: ${localStorage.getItem(key)}`)
        if(key==email2 && localStorage.getItem(key)==password){
            location.href="UserDashboard.html";
            flag=true;
            break;
        }
      }
      if(flag==false){
        alert("Email or password entered is incorrect.");
      }

});

// function login2(){
//     var email2 = document.getElementById("email").value;
//     var password = document.getElementById("pass").value;

//     var email1 = localStorage.getItem("email-1");
//     var pass1 = localStorage.getItem("password-1");
    
//     if(email2==email1 && password==pass1){
//         window.location.href="https://codewithharry.com";
//     }
//     else{
//         alert("Email or password entered is incorrect.");
//     }
// };
