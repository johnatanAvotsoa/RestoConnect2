window.addEventListener('load',()=>{
    const text = " Bienvenue sur RestoConnect ! " ; 
    const code = document.getElementById('text') ;
    let i = 0 ; 
    const writer = ()=>{
        if(i<text.length){
            code.innerHTML += text.charAt(i) ; 
            i++ ; 
        }
        else{
            i = 0 ; 
            code.innerHTML = "" ; 
        }
    }
        setInterval(writer,200);

})