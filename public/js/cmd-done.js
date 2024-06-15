var btnArray = document.getElementsByClassName('donebtn') ;
// btnArray.forEach(btn => {
//     btn.addEventListner('click',e=>{
//         console.log('1'); 
//     })
// });
for(let i= 0 ; i<btnArray.length ; i++){
    btnArray[i].addEventListener('click',e=>{
        btnArray[i].innerHTML = 'Prête' ;
        btnArray[i].classList.remove('btn-secondaire') ; 
        btnArray[i].classList.add('btn-principale');
        e.target.parentElement.parentElement.style.border = '3px solid red';
    })
}
