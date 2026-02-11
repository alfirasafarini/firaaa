<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <fieldset>
        <legend>Login</legend>
        <p>
            <label>Username:</label>
            <input type="text" name="username" plaaceholder="username..."/>
        </p>
        <p>
            <label>Username:</label>
            <input type="password" name="password" placeholder="password..."/>
        </p>
        <p>
            <label><input type="checkbox" name="remember" value="remember" /> Remember me</label>
        </p>
        <p>
            <input type="submit" name="submit" value="login" />
        </p>
        </fieldset> 
    </form>       
</body>
</html>