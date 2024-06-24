document.getElementById("contactForm").addEventListener("submit", function (event) {
    event.preventDefault();
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var responseDiv = document.getElementById("response");

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "sendEmail.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        if (xhr.status === 200) {
            responseDiv.textContent = xhr.responseText;
            document.getElementById("contactForm").reset();
        } else {
            responseDiv.textContent = "Une erreur est survenue. Veuillez réessayer.";
        }
    };
    xhr.send("name=" + name + "&email=" + email + "&message=" + message);
});
