<!DOCTYPE html>
<html>
<head>
    <title>User Area</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="site/font-awesome-4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="site/css/css.css">
    </head>
    <body>
    <div class="main">
        <h1>User <span>Register</span></h1>
        <div class="forms">
        <div class="one">
            <h2>Login</h2>
            <form action="registerController.php" method="post">
            <label>Email:</label>
            <input type="text" name="username" placeholder="username" >
                <div class="eye">
                    <input type="password" name="password" placeholder="Password" class="pass" > <i class="fa fa-eye fa-lg" aria-hidden="true"></i></div>
                    <input type="submit" name="submit" value="LogIn">
            </form>
            
           
            
            </div>
        <div class="center">
            <div class="parent">
            <div class="circle"><span>or</span></div>
                </div>
            </div>
        <div class="two">
            <h2>Sign Up</h2>
            <form action="registerController.php" method="post" novalidate="">
                <input type="text" name="name" placeholder="Name" >
                <input type="text" name="username" placeholder="Username" >
                <input type="email" name="email" placeholder="Email">
                <div class="eye">
                    <input type="password" name="password" placeholder="Password" class="pass" ><i class="fa fa-eye fa-lg" aria-hidden="true"></i>
                    </div>
            
                <input type="submit" name="submit" value="SignUp">
            </form>
            </div>
        </div>
        </div>
        <script src="site/js/jquery-1.11.3.min.js"></script>
        <script src="site/js/js.js"></script>
    </body>
</html>