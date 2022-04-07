const usersList = document.querySelector(".users .users-list");

setInterval(()=>{
    let xhr = new XMLHttpRequest(); // XML object
    xhr.open("GET", "php/admins.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status === 200)
            {
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 500); // This function will run every 500ms