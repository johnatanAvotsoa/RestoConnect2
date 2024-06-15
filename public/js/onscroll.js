
const reveal = ()=>{
    const reveals = document.querySelectorAll('.reveal') ;
    const box = document.querySelectorAll('.box') ;
    const up = document.querySelectorAll('.up') ;
    console.log(up.length)
    up.forEach(reveal=>{
        let windowHeight = window.innerHeight ; 
        let revealTop = reveal.getBoundingClientRect().top ; 
        const revealpoint = 150 ; 
        if(revealTop < windowHeight - revealpoint){
            reveal.classList.add('up-show') ; 
        }
        else{
            reveal.classList.remove('up-show')
        }
    })
    reveals.forEach(reveal=>{
        let windowHeight = window.innerHeight ; 
        let revealTop = reveal.getBoundingClientRect().top ; 
        const revealpoint = 150 ; 
        if(revealTop < windowHeight - revealpoint){
            reveal.classList.add('active') ; 
        }
        else{
            reveal.classList.remove('active')
        }
    })
    box.forEach(el=>{
        let windowHeight = window.innerHeight ; 
        let revealTop = el.getBoundingClientRect().top ; 
        const revealpoint = 150 ; 
        if(revealTop < windowHeight - revealpoint){
            el.classList.add('box-show') ; 
        }
        else{
            el.classList.remove('box-show')
        }
    })
}

window.addEventListener('scroll',reveal) ; 