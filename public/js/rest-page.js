const btn1 = document.getElementsByClassName('btn-1')[0];
const btn2 = document.getElementsByClassName('btn-1')[1] ;
const menu = document.getElementById('menu');
const avis = document.getElementById('avis');
btn2.addEventListener('click',()=>{
    btn2.classList.add('btn-1-hover');
    btn1.classList.remove('btn-1-hover');
    menu.classList.add('d-none');
    avis.classList.remove('d-none') ; 
})
btn1.addEventListener('click',()=>{
    btn2.classList.remove('btn-1-hover');
    btn1.classList.add('btn-1-hover');
    menu.classList.remove('d-none');
    avis.classList.add('d-none') ; 
})