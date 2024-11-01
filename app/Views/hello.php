<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f5;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .login-container {
            position: relative;
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Gradient shapes */
        .left-shape, .right-shape {
            position: absolute;
            top: 50%;
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, #007bff, #00d4ff);
            border-radius: 50%;
            transform: translateY(-50%);
            z-index: -1;
        }

        .left-shape {
            left: -100px;
        }

        .right-shape {
            right: -100px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .form-control {
            border-radius: 30px;
            padding: 10px 20px;
        }

        .form-group {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .btn-primary {
            width: 100%;
            border-radius: 30px;
            padding: 10px;
            font-weight: bold;
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .google-btn {
            margin-top: 10px;
            padding: 10px;
            border-radius: 30px;
            width: 100%;
            font-weight: bold;
            color: #444;
            background-color: #fff;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .google-btn img {
            width: 20px;
            margin-right: 10px;
        }

        .text-links {
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .text-links a {
            color: #007bff;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 20px;
            color: #aaa;
        }

        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }

        .divider:not(:empty)::before {
            margin-right: 0.5em;
        }

        .divider:not(:empty)::after {
            margin-left: 0.5em;
        }
    </style>
</head>
<body>

<div class="left-shape"></div>
<div class="right-shape"></div>

<div class="login-container">
    <h2>Login</h2>
    <form>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email ID" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" id="password" required>
            <span class="toggle-password" onclick="togglePassword()">👁️</span>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <div class="text-links">
            <a href="#">Forgot password?</a> | <a href="#">Create new</a>
        </div>
        <div class="divider">Or Login with</div>
        <button type="button" class="google-btn">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" alt="Google logo"> Sign in with Google
        </button>
    </form>
</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>

</body>
</html>
