const form = document.querySelector('#form');
const username = document.querySelector('#username');
const password = document.querySelector('#password');
const phone = document.querySelector('#number');
const email = document.querySelector('#email');



// function to send form data to signup_process.php async
form.addEventListener('submit', function(e){
 
    xhr = new XMLHttpRequest();

    xhr.open('POST', 'signup_process.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            alert(JSON.parse(this.responseText));
        }
    }

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    const formData = `username=${username.value}&password=${password.value}&phone=${phone.value}&email=${email.value}`

    xhr.send(formData);

    // To clear the input fields
    username.value = "";
    password.value = "";
    phone.value = "";
    email.value = "";
    e.preventDefault();
})