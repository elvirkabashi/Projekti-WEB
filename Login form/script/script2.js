const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');


form.addEventListener('submit', e =>{
    e.preventDefault();

    validateImputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateImputs = () => {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    var count=0;

    const useremail='user@gmail.com';
    const userpassword=123456789;
    

    if(emailValue === ''){
        setError(email, 'Email is required');
    }else if(emailValue !== useremail || !isValidEmail(emailValue)){
        setError(email, 'Email is incorrect')
    }else{
        setSuccess(email);
        count++;
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue != userpassword) {
        setError(password, 'Password is incorrect')
    } else {
        setSuccess(password);
        count++;
    }

    // if(count==2){
    //     alert('You have succesful logged in')
    //     open('../index.html')
    // }


};