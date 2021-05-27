const pswrdFile = document.querySelector(".form input[type='password']");
toggleBtn = document.querySelector(".form .filed i");

toggleBtn.onclick = ()=>{
    if(pswrdFile.type == "password") {
        alert();
    } else {
        pswrdFile.type = "password";
    }
}