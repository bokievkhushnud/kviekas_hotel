let firstName_B = document.querySelector('#firstname')
let lastName_b = document.querySelector('#lastname')
let tel_b = document.querySelector('#tel')
let email_b = document.querySelector('#emailb')
let err_msg_b = document.querySelector('.error-message-b h3')
let checkIn = document.querySelector('#check-in')
let checkOut = document.querySelector('#check-out')

function validateBooking(event) {
    let messages_b = []
    if (firstName_B.value == "") {
        firstName_B.parentElement.classList.remove('luck')
        firstName_B.parentElement.classList.add('error')
        messages_b.push("first name is requered !")
        firstName_B.parentElement.querySelector('small').innerHTML = 'first name is requered !'
    }
    else if (firstName_B.value !== "") {
        firstName_B.parentElement.classList.remove('error')
        firstName_B.parentElement.classList.add('luck')
        firstName_B.parentElement.querySelector('small').innerHTML = ''
    }
    if (lastName_b.value == "") {
        lastName_b.parentElement.classList.remove('luck')
        lastName_b.parentElement.classList.add('error')
        messages_b.push("first name is requered !")
        lastName_b.parentElement.querySelector('small').innerHTML = 'last name is requered !'
    }
    else if (lastName_b.value !== "") {
        lastName_b.parentElement.classList.remove('error')
        lastName_b.parentElement.classList.add('luck')
        lastName_b.parentElement.querySelector('small').innerHTML = ''
    }
    if (tel_b.value == "") {
        tel_b.parentElement.classList.remove('luck')
        tel_b.parentElement.classList.add('error')
        messages_b.push("Phone number is required !")
        tel_b.parentElement.querySelector('small').innerHTML = 'phone number is required !'
    }
    else if (tel_b.value !== "") {
        if (isNaN(tel_b.value)) {
            messages_b.push("Phone number should contain only numbers !")
            tel_b.parentElement.querySelector('small').innerHTML = 'Phone number should contain only numbers !'
        }
        else {
            tel_b.parentElement.classList.remove('error')
            tel_b.parentElement.classList.add('luck')
            tel_b.parentElement.querySelector('small').innerHTML = ''
        }
    }
    if (email_b.value == "") {
        email_b.parentElement.classList.remove('luck')
        email_b.parentElement.classList.add('error')
        messages_b.push("email is requered !")
        email_b.parentElement.querySelector('small').innerHTML = 'email is requered !'

    }
    else if (email_b.value !== "") {
        if (ValidateEmailBooking(email_b.value)) {
            email_b.parentElement.classList.remove('error')
            email_b.parentElement.classList.add('luck')
            email_b.parentElement.querySelector('small').innerHTML = ''
        } else {
            email_b.parentElement.querySelector('small').innerHTML = 'email is incorrect !'
            messages_b.push("email is requered !")
        }
    }
    if (checkIn.value == "") {
        checkIn.parentElement.classList.remove('luck')
        checkIn.parentElement.classList.add('error')
        messages_b.push("check in date is required !")
        checkIn.parentElement.querySelector('small').innerHTML = 'check in date is required !'
    }
    else if (checkIn.value !== "") {
        checkIn.parentElement.classList.remove('error')
        checkIn.parentElement.classList.add('luck')
        checkIn.parentElement.querySelector('small').innerHTML = ''
    }
    if (checkOut.value == "") {
        checkOut.parentElement.classList.remove('luck')
        checkOut.parentElement.classList.add('error')
        messages_b.push("check in date is required !")
        checkOut.parentElement.querySelector('small').innerHTML = 'check in date is required !'
    }
    else if (checkOut.value !== "") {
        checkOut.parentElement.classList.remove('error')
        checkOut.parentElement.classList.add('luck')
        checkOut.parentElement.querySelector('small').innerHTML = ''
    }

    if (messages_b.length > 0) {
        event.preventDefault()
        err_msg_b.focus()
        err_msg_b.innerHTML = 'Fill the fields correctly !!!'
        setTimeout(() => err_msg_b.remove(), 2000)

    }
}
function ValidateEmailBooking(email_b) {
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email_b)) {
        return (true)
    }
    else {
        return (false)
    }
}