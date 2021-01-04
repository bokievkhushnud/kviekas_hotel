// Inputs
let cname = document.querySelector('#cname')
let cemail = document.querySelector('#cemail')
let subject = document.querySelector('#subject')
let ctext = document.querySelector('#ctext')

// Form Validation
// Feedback Form
function validateContact(event) {

    let messages = []

    if (cname.value == "") {
        cname.parentElement.classList.remove('luck')
        cname.parentElement.classList.add('error')
        messages.push("name is requered !")
        cname.parentElement.querySelector('small').innerHTML = 'first name is requered !'


    }
    else if (cname.value !== "") {
        cname.parentElement.classList.remove('error')
        cname.parentElement.classList.add('luck')
        cname.parentElement.querySelector('small').innerHTML = ''
    }
    if (cemail.value == "") {
        cemail.parentElement.classList.remove('luck')
        cemail.parentElement.classList.add('error')
        messages.push("email is requered !")
        cemail.parentElement.querySelector('small').innerHTML = 'email is requered !'
    }
    else if (cemail.value !== "") {
        if (ValidateEmail(cemail.value)) {
            cemail.parentElement.classList.remove('error')
            cemail.parentElement.classList.add('luck')
            cemail.parentElement.querySelector('small').innerHTML = ''
        } else {
            cemail.parentElement.querySelector('small').innerHTML = 'email is incorrect !'
            messages.push("email is requered !")
        }
    }
    if (subject.value == "") {
        subject.parentElement.classList.remove('luck')
        subject.parentElement.classList.add('error')
        messages.push("name is requered !")
        subject.parentElement.querySelector('small').innerHTML = 'first name is requered !'


    }
    else if (subject.value !== "") {
        subject.parentElement.classList.remove('error')
        subject.parentElement.classList.add('luck')
        subject.parentElement.querySelector('small').innerHTML = ''
    }
    if (ctext.value == "") {
        ctext.parentElement.classList.remove('luck')
        ctext.parentElement.classList.add('error')
        messages.push("name is requered !")
        ctext.parentElement.querySelector('small').innerHTML = 'first name is requered !'


    }
    else if (ctext.value !== "") {
        ctext.parentElement.classList.remove('error')
        ctext.parentElement.classList.add('luck')
        ctext.parentElement.querySelector('small').innerHTML = ''
    }


    if (messages.length > 0) {
        event.preventDefault()
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