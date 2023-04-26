let userList = document.querySelector("body > div > div > div.user-right")
let searchBar = document.querySelector(".search-bar input")

//User search
searchBar.onkeyup = () => {
 
    let searchTerm = searchBar.value
    if(searchTerm != "")  {
            searchBar.classList.add("active");
          }else{
            searchBar.classList.remove("active");
          }
        // Starting AJAX
let xhr = new XMLHttpRequest()

xhr.open("POST", "php/search.php", true)
xhr.onload = () => {

    if(xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200) {
            let data = xhr.response
            console.log(data);
               userList.innerHTML = data
        }
    }

}

xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xhr.send("searchTerm=" + searchTerm)
    }


setInterval(() => {
    
// Starting AJAX
let xhr = new XMLHttpRequest()

xhr.open("GET", "php/users.php", true)
xhr.onload = () => {

    if(xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200) {
            let data = xhr.response

            if(!searchBar.classList.contains("active")){
                userList.innerHTML = data;
              }
        }
    }

}

xhr.send()


}, 500); //This function will run every 500 ms