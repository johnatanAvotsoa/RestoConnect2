const c = document.getElementById('confirm-btn');
c.addEventListener('click',()=>{
    const select = document.getElementById('select');
    classList = Array.from(select.classList);
    if(classList.indexOf("d-none") > 0){
        select.classList.remove('d-none');
    }else{
        select.classList.add('d-none') ; 
    }


})

const main = document.getElementById('main');
const lb = document.getElementById('livrer');
const cmd = document.getElementById('commander');
const cmdForm = document.getElementById('cmd-form');
const lForm = document.getElementById('l-form');
 
cmd.addEventListener('click', ()=>{
    lForm.classList.add("d-none"); 
    main.classList.add("d-none");
    cmdForm.classList.remove("d-none");
})
lb.addEventListener('click', ()=>{
    console.log(lForm)
    lForm.classList.remove("d-none"); 
    main.classList.add("d-none");
    cmdForm.classList.add("d-none");
})