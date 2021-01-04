//Selectors
let header = document.querySelector('.header')
let hamburgerMenu = document.querySelector('.hamburger-menu')
let form = document.querySelector('.feedback-form')
// Inputs
let firstName = document.querySelector('#fname')
let lastName = document.querySelector('#lname')
let email = document.querySelector('#email')

let username = document.querySelector('#username')
let paswword = document.querySelector('#password')

let err_msg = document.querySelector('.error-message h3')
// Function tu change the color of the nav section when scrolling down
window.addEventListener('scroll', function () {
    let windowPosition = window.scrollY > 0;
    header.classList.toggle('active', windowPosition)
})

// Hamburger menu when small screen
hamburgerMenu.addEventListener('click', function () {
    header.classList.toggle('menu-open')
})

// Form Validation
// Feedback Form
function validate(e) {

    let messages = []

    if (firstName.value == "") {
        firstName.parentElement.classList.remove('luck')
        firstName.parentElement.classList.add('error')
        messages.push("first name is requered !")
        firstName.parentElement.querySelector('small').innerHTML = 'first name is requered !'


    }
    else if (firstName.value !== "") {
        firstName.parentElement.classList.remove('error')
        firstName.parentElement.classList.add('luck')
        firstName.parentElement.querySelector('small').innerHTML = ''
    }
    if (lastName.value == "") {
        lastName.parentElement.classList.remove('luck')
        lastName.parentElement.classList.add('error')
        messages.push("first name is requered !")
        lastName.parentElement.querySelector('small').innerHTML = 'last name is requered !'
    }
    else if (lastName.value !== "") {
        lastName.parentElement.classList.remove('error')
        lastName.parentElement.classList.add('luck')
        lastName.parentElement.querySelector('small').innerHTML = ''
    }
    if (email.value == "") {
        email.parentElement.classList.remove('luck')
        email.parentElement.classList.add('error')
        messages.push("email is requered !")
        email.parentElement.querySelector('small').innerHTML = 'email is requered !'

    }
    else if (email.value !== "") {
        if (ValidateEmail(email.value)) {
            email.parentElement.classList.remove('error')
            email.parentElement.classList.add('luck')
            email.parentElement.querySelector('small').innerHTML = ''
        } else {
            email.parentElement.querySelector('small').innerHTML = 'email is incorrect !'
            messages.push("email is requered !")
        }
    }


    if (messages.length > 0) {
        e.preventDefault()
        err_msg.focus()
        err_msg.innerHTML='Fill the fields correctly !!!'
        setTimeout(()=> err_msg.remove(),2000)

    }
}
function ValidateEmail(email) {
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
        return (true)
    }
    else {
        return (false)
    }
}


function loginValidate(event){
    let messages = []

    if (username.value == "") {
        username.parentElement.classList.remove('luck')
        username.parentElement.classList.add('error')
        messages.push("first name is requered !")
        username.parentElement.querySelector('small').innerHTML = 'Username name is requered !'
    }
    else if (username.value !== "") {
        username.parentElement.classList.remove('error')
        username.parentElement.classList.add('luck')
        username.parentElement.querySelector('small').innerHTML = ''
    }
    if (paswword.value == "") {
        paswword.parentElement.classList.remove('luck')
        paswword.parentElement.classList.add('error')
        messages.push("first name is requered !")
        paswword.parentElement.querySelector('small').innerHTML = 'Password name is requered !'
    }
    else if (paswword.value !== "") {
        paswword.parentElement.classList.remove('error')
        paswword.parentElement.classList.add('luck')
        paswword.parentElement.querySelector('small').innerHTML = ''
    }
   
    if (messages.length > 0) {
        event.preventDefault()

    }
}
