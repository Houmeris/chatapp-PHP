const form = document.getElementById("regform"),
continueBtn = document.getElementById("loginbutton"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e) =>{
    e.preventDefault();
}

continueBtn.onclick = () =>{
    let xhr = new XMLHttpRequest(); // XML object
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status === 200)
            {
                let data = xhr.response;
                console.log(data);
                if(data == "success")
                {
                    location.href = "users.php";
                }
                else
                {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
                
            }
        }
    }
    // Send form from ajax to PHP
    let formData = new FormData(form);
    xhr.send(formData); // Send form from ajax to PHP
}