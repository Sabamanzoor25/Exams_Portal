const btn = document.getElementById('btn');
btn.addEventListener("click", login, false);
function login(event) {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var usernameLower = username.toLowerCase();
    
    // Hard-coded credentials
    var hardcodedUsername = 'admin';
    var hardcodedPassword = 'admin';
    console.log(username)
    console.log(password)
    if (usernameLower === hardcodedUsername && password === hardcodedPassword) {
        //   alert('Login successful!');
        event.preventDefault();
        window.location.href = 'table.php';
        // Perform further actions or redirect to a new page
    } else {
        alert('Invalid login credentials!');
    }
}
