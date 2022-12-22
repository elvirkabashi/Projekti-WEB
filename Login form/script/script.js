const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');

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
    const cpasswordValue = cpassword.value.trim();
    var count=0;

    if(emailValue === ''){
        setError(email, 'Email is required');
    }else if(!isValidEmail(emailValue)){
        setError(email, 'Valid email (@,.com,.net etc)')
    }else{
        setSuccess(email);
        count++;
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
        count++;
    }

    if(cpasswordValue === '') {
        setError(cpassword, 'Please confirm your password');
    } else if (cpasswordValue !== passwordValue) {
        setError(cpassword, "Passwords doesn't match");
    } else {
        setSuccess(cpassword);
        count++;
    }

    if(count==3){
        alert('Your account has been created succesfull!');
    }
};