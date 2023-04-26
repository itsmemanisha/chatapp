const form = document.querySelector(".chat-form")
const inputField = form.querySelector(".input-field")
const chatButton = form.querySelector(".btn-send")
const chattingArea = document.querySelector(".chatting-area")

form.onsubmit = (e) => {
e.preventDefault()
}

chattingArea.onmouseenter = () => {
    chattingArea.classList.add("active")
}

chattingArea.onmouseleave = () => {
    chattingArea.classList.remove("active")
}




chatButton.onclick = () => {
    let xhr = new XMLHttpRequest()
    xhr.open("POST", "php/insert-chat.php", true)
    xhr.onload = () => {

        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
             inputField.value = "" // Leaves input field empty once message is sent and saved into the database
            }
        }

    }

    // Sending form data through AJAX to PHP
    let formData = new FormData(form)
    xhr.send(formData)
}

setInterval(() => {
    
    // Starting AJAX
    let xhr = new XMLHttpRequest()
    
    xhr.open("POST", "php/get-chat.php", true)
    xhr.onload = () => {
    
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
              
                let data = xhr.response
                    chattingArea.innerHTML = data;
                    if(!chattingArea.classList.contains("active")) {

                        scrollToBottom()
                    }
            }
        }
    
    }

      // Sending form data through AJAX to PHP
      let formData = new FormData(form)
      xhr.send(formData)    
    
    }, 500); //This function will run every 500 ms


    function scrollToBottom() {
        window.scroll(0, chattingArea.scrollHeight)
    }