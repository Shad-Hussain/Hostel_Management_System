<html>
<head>
<title> User Login And Registration</title>
<link rel="stylesheet" type="text/css" type="text/css" href="../css/form.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="login col-md-6">
    <h2> Register Here</h2>
     
     <form action="registration.php" method="POST">
        <div class="form-group">
            <Label>Username</Label>
            <input type="text" name="user" class="form-control" required>
        </div>

        <div class="form-group">
            <Label>Password</Label>
            <input type="password" name="password" class="form-control" required>
        </div>
            <button type="submit" class="btn btn-primary"> Sign Up </button>
    <p><a href="formlogin.php"> Click to log in if already registered.</a></p>
       </form>
       
    </div>
    </div>
    </div>
</div>





</body>
</html>