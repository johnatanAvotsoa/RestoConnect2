const u = document.getElementById('btn-user');
const r = document.getElementById('btn-res');
u.addEventListener('click',(e)=>{
    const restF = document.getElementById('rest-form');
    const form = e.target.parentElement ; 
    form.classList.add('d-none');
    restF.classList.remove('d-none');
})
r.addEventListener('click',(e)=>{
    const userF = document.getElementById('user-form');
    const form = e.target.parentElement ; 
    form.classList.add('d-none');
    userF.classList.remove('d-none');
})