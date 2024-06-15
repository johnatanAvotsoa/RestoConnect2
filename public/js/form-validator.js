const mdpI = document.getElementById('mdp') ; 
const mdpConfI = document.getElementById('mdp-conf') ;
const error = document.getElementById('msg-error');
const btn = document.getElementById('btn') ;
mdpConfI.addEventListener('input',()=>{
    if(mdpConfI.value != mdpI.value && mdpConfI.value != ""){
        error.innerHTML = "" ;
        error.innerHTML = "Les mots de passes ne correspondent pas !" ; 
        btn.disabled = true ; 
    }
    else{
        error.innerHTML = "" ; 
        btn.disabled = false ; 
    }
})
mdpI.addEventListener('input',()=>{
    let passwordRegex = /^(?=.*[!@#$%^&*()-_=+{};:'",.<>/?[\]`~|])[\w!@#$%^&*()-_=+{};:'",.<>/?[\]`~|]{8,}$/;
    if(mdpI.value.length <8 && mdpI.value != ""){
        error.innerHTML = "Le mot de passe doit contenir au moins 8 caractères"
    }else if(mdpI.value.length>8 || mdpI.value ==""){
        error.innerHTML = "" ; 
        if(!passwordRegex.test(mdpI.value)){
            error.innerHTML = "Essayer un mot de passe avec des caractères spéciaux";
            btn.disabled = true ; 
        }else{
            error.innerHTML = "";
            btn.disabled = false ; 
        }
    }
})