setInterval(()=>{
    let xhr = new XMLHttpRequest(); // XML object
    xhr.open("GET", "php/checkstatus_admins.php", true);
    xhr.send();
}, 5000); // This function will run every 5 seconds