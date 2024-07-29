let username=document.querySelector("#username");
let password=document.querySelector("#password");
let loginBtn=document.querySelector("#sign_in");


loginBtn.addEventListener("click",function(e){
    e.preventDefault();
    if(username.value === "Aous Younes" && password.value === "195951"){
        setTimeout(()=>{
            window.location="index30.php"
        },500);
    }else{
            alert("Username OR Password is Wrong");
            setTimeout(()=>{
                window.location="index30.php"
            },500);
        }
    }
);