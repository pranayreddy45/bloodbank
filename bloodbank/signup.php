<html>
    <head>
        <style>
            label{
                display:block;
                text-align:left;
            }

        </style>
    </head>
    <body>

        <form action="signupphp.php" method="POST">

            <label>Name</label> <input type="text" name="name" required>
            <br>
            <label>Email</label> <input type="email" name="email">
            <br>
            <label>Phone No</label> <input type="text" name="phone" required>
            <br>
            <label>Password</label> <input type="password" name="pass" required>
            <br>
            <label>Confirm Password</label> <input type="password" name="confirm" required>
            <br>
            <label>Blood Group</label> <input type="text" name="blood" required>
            <br>
            <label>Address</label> <input type="text" name="address">
            <br>
            <label>City</label> <input type="text" name="city" required>
            <br>
            <label>State</label> <input type="text" name="state" required>
            <br>
            <label>Country</label> <input type="text" name="country" required>
            <br>
            <input type="submit" name="signup" value="Sign Up">

        </form>

    </body>

</html>