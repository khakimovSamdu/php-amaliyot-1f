<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                   <span class="details">First Name</span> 
                   <input type="text" placeholder="Enter your firstname" required>
                </div>

                <div class="input-box">
                    <span class="details">Last Name</span> 
                    <input type="text" placeholder="Enter your lastname" required>
                </div>

                <div class="input-box">
                    <span class="details">Email</span> 
                    <input type="email" placeholder="Enter your email" required>
                </div>

                <div class="input-box">
                    <span class="details">Phone Number</span> 
                    <input type="number" placeholder="Enter your number" required>
                </div>

                <div class="input-box">
                    <span class="details">Password</span> 
                    <input type="password" placeholder="Enter your password" required>
                </div>

                <div class="input-box">
                    <span class="details">Confirm Password</span> 
                    <input type="password" placeholder="Confirm your password" required>
                </div>
            </div>
            
            <div class="button">
                <input type="submit" name = "register" value ="Yuborish">
                <button type="submit" name="register">Yuborish</button>
            </div>
        </form>
    </div>
</body>
</html>