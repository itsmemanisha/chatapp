<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

    <link rel="stylesheet" href="css/signup.css">
    <title>Chat App | Sign Up</title>
</head>
<body>
    
    <div class="sign-up-form">

        <div class="sign-up-form-container">

        <form action="#" method = "POST" enctype = "multipart/form-data">
            <div class="sign-up-left">
                <h1>Get Started</h1>
                <div class="form">

                    <div class="form-field">
                        <label>Username</label>
                        <input type="text" placeholder="Username" name="username" id="username" required>
                    </div>

                    <div class="form-field">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email" id="email" required>
                    </div>

                    <div class="form-field">
                        <label>Password</label>
                        <input type="password" placeholder="Password" name="password" id="password" required>
                    </div>

                    <div class="form-field">
                        <label>Select your avatar</label>
                        <input type="file" name="avatar" id="avatar" required>
                    </div>

                    <div class="cta">
                        <div class="btn-sign-up">
                            <button>Sign Up</button>
                         </div>
     
                         <div class="btn-sign-in">
                             <button><a href="signin.php">Sign In</a></button>
                          </div>
                    </div>

                   
        </form>



                </div>
            </div>
            <div class="sign-up-right">
                <div class="image-container">
                    <img src="./assets/manisha.png" alt="Manish with phone">
                </div>
            </div>

        </div>



    </div>
    <script src="./js/signup.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

</body>
</html>