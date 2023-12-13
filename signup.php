<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>Insuarance Clain Form</title>
</head>
<body>

    <div class="all_container">
        <p>SIGNUP FORM</p>

        <form action="" method="post" class="form">
            <div class="inputbox">
                <input type="text" name="username" id="name" required>
                <span>UserName</span>
                <i></i>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="inputbox">
                <input type="email" name="email" id="email" required>
                <span>Email</span>
                <i></i>
            </div>

            <div class="inputbox">
                <input type="password" name="password" id="password" required>
                <span>Password</span>
                <i></i>
            </div>

            <div class="submit">
                <input type="submit" value="Sign Up" class="btn btn-success"  onclick="message()">
            </div>

            <div class="p">
                <p>Already Have an Account <a href="#">Login</a></p>
            </div>

            <div class="message">
                <div class="success text-success" id="success">Your Data Are Inserted Successfully</div>
                <div class="danger text-danger" id="danger">Your Data Are Failed to be Inserted</div>
            </div>
        </form>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>