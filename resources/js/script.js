




let btn=document.getElementById('btn');
let form=document.getElementById('form-id');

btn.addEventListener('click',(event)=>{
    event.preventDefault();
    form.submit();
})
