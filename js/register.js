let username=document.querySelector("#username");
let email=document.querySelector("#email");
let password=document.querySelector("#password");

let registerBtn=document.querySelector("#sign_up");

registerBtn.addEventListener("click",function(e){
    e.preventDefault()
    if(username.value==="Aous Younes" || email.value==="Aousyounes115@gmail.com" || password.value==="195951"){
        setTimeout(()=>{
            window.location="index30.php"
        },500)
        
    }else{
        alert("please fill your data");
        
        
    }
})