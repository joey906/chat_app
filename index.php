<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/3d715e0df8.js" crossorigin="anonymous"></script>
    
    <title>Chat app</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>
            Chat App
            </header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                    <div class="field">
                        <label for="">Email Address</label>
                        <input type="text" placeholder="Email Address">
                    </div>
                    <div class="field">
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter new password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field">
                        <label for="">Select Image</label>
                        <input class="file" type="file">
                    </div>
                    <div class="field">
                        <input class="button" type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Already signed up?<a href="./login.php"> Login now</a></div>
        </section>
        
    </div>
    <script src="./javascript/pass-show-hide.js"></script>
    
</body>
</html>