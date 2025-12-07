document.getElementById("loginForm").addEventListener("submit", function(event) {
    let email = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    fetch("login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ username: username, password: password })
    })

    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Login successful.");
        } else {
            alert("Invalid username or password.");
        }
    })
});