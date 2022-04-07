setInterval(()=>{
    let xhr = new XMLHttpRequest(); //XML objektas
    xhr.open("GET", "php/checkstatus.php", true);
    xhr.send();
}, 5000); // This function will run every 5 seconds