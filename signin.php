<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <title>Chat App | Sign In</title>
</head>
<body>
    
    <div class="sign-in-form">

        <div class="sign-in-form-container">

          
            <div class="sign-in-left">
                <h1>Welcome, Sign In</h1>
            <div class="form">

                <form action="#" method = "POST" >
                    <!-- <div class="form-field">
                        <label>Username</label>
                        <input type="text" placeholder="Username" name="username" id="username" required>
                    </div> -->

                    <div class="form-field">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email" id="email" required>
                    </div>

                    <div class="form-field">
                        <label>Password</label>
                        <input type="password" placeholder="Password" name="password" id="password" required>
                    </div>

                    <!-- <div class="form-field">
                        <label>Select your avatar</label>
                        <input type="file" name="avatar" id="avatar" required>
                    </div> -->

                    <div class="cta">
                        <div class="btn-sign-in">
                            <button>Sign In</button>
                         </div>
     
                         <div class="btn-sign-up">
                             <button><a href="index.php">Sign Up</a></button>
                          </div>
                    </div>
                </form>

                </div>
            </div>

            <div class="sign-in-right">
                <div class="image-container">
                    <img src="./assets/manisha2.png" alt="Manish with phone">
                </div>
            </div>

        </div>




    </div>
    <script src="./js/signin.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</body>
</html>