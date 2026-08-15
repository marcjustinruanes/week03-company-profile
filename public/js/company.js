const toggle=document.querySelector('.nav-toggle');
const links=document.querySelector('.nav-links');
if(toggle&&links){
  toggle.addEventListener('click',()=>{
    const open=links.classList.toggle('open');
    toggle.setAttribute('aria-expanded',open);
  });
}
document.querySelectorAll('.contact-form').forEach(form=>{
  form.addEventListener('submit',e=>{
    e.preventDefault();
    const button=form.querySelector('button');
    const original=button.innerHTML;
    button.innerHTML='Inquiry ready ✓';
    button.style.background='#607562';
    setTimeout(()=>{button.innerHTML=original;button.style.background='';},2200);
  });
});
