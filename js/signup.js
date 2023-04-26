const form = document.querySelector(".sign-up-form-container form")
const formButton = document.querySelector(".btn-sign-up button")

form.onsubmit = (e) => {
e.preventDefault()
}

formButton.onclick = () => {
    // Starting AJAX
    let xhr = new XMLHttpRequest()
    xhr.open("POST", "php/signup.php", true)
    xhr.onload = () => {

        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response
                if(data === "success") {
                    location.href = "users.php"
                }
                else {
                    var notification = alertify.error(data);
                }
            }
        }

    }

    // Sending form data through AJAX to PHP
    let formData = new FormData(form)
    console.log(formData);
    xhr.send(formData)
}