const form = document.getElementById("regform"),
continueBtn = document.getElementById("regbutton"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e) =>{
    e.preventDefault();
}

continueBtn.onclick = () =>{
    let xhr = new XMLHttpRequest(); //XML object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status === 200)
            {
                let data = xhr.response;
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
    xhr.send(formData); // Send formData to PHP
}