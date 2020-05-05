const myForm=document.querySelector('.main-form');
const usernameInput=document.querySelector('#username');
const passwordInput=document.querySelector('#password');
const msg=document.querySelector('.msg');

myForm.addEventListener('submit',onSubmit);

function onSubmit(e){
    // e.preventDefault();
    if(usernameInput.value ==='' || passwordInput.value === ''){
        msg.classList.add('error');
        msg.innerHTML= 'please enter all fields';
        setTimeout(()=> msg.remove(),3000);
    }else{
        console.log('success');
    }
}