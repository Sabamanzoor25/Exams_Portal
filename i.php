<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Toggle</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .admin-login {
            display: none;
        }
    </style>
</head>
<body class="container mt-5">

    <div class="btn-group">
        <button id="userLoginBtn" class="btn btn-primary">User Login</button>
        <button id="adminLoginBtn" class="btn btn-secondary">Admin Login</button>
    </div>

    <div class="user-login mt-3 col-md mx-auto p-4">
    <!-- User Login Form Here -->
    <h2>User Login Form</h2>
    <form id="userLoginForm">
        <!-- Your user login form fields go here -->
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

    <div class="admin-login mt-3 col-md-6 mx-auto p-4">
        <!-- Admin Login Form Here -->
        <h2>Admin Login Form</h2>
        <form id="adminLoginForm">
            <!-- Your admin login form fields go here -->
            <div class="form-group">
                <label for="adminUsername">Admin Username:</label>
                <input type="text" class="form-control" id="adminUsername" name="adminUsername">
            </div>
            <div class="form-group">
                <label for="adminPassword">Admin Password:</label>
                <input type="password" class="form-control" id="adminPassword" name="adminPassword">
            </div>
            <button type="submit" class="btn btn-secondary">Login</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Show user login by default
            $('.user-login').show();
            $('.admin-login').hide();

            // User Login button click
            $('#userLoginBtn').on('click', function () {
                $('.user-login').show();
                $('.admin-login').hide();
            });

            // Admin Login button click
            $('#adminLoginBtn').on('click', function () {
                $('.user-login').hide();
                $('.admin-login').show();
            });
        });
    </script>
</body>
</html>
