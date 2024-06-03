<!DOCTYPE html> 
<html>
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <title>Realtime Chat App</title> <link rel="stylesheet" href="style.css"> 
    </head> 
    <body>  
        <div class="wrapper">
            <section class="form signup">
                <header>Realtime Chat App</header>
                <form action="#">
                    <div class="error-txt">This is an error</div>
                    <div class="name-details">
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="field input">
                        <label>E-mail Adress</label>
                        <input type="text" placeholder="enter your e-mail">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="enter your Password">
                        <i class="fas fa-eye"></i>

                    </div>
                    <div class="field image">
                        <label>Select image</label>
                        <input type="file">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                    <div class="link">Already signed up? <a href="login.html">Login now</a></div>
                </form>
            </section>
        </div>
        <script src="js/passwd-show-hide.js"></script>
        <script src="js/signup.js  "></script>
    </body> 
</html>
