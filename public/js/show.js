const form = document.getElementById('form');
const btn = document.getElementById('btn');
const main = document.getElementById('main');
console.log(main)
btn.addEventListener('click',()=>{
    form.classList.remove('d-none');
    main.style.opacity = '0';
})