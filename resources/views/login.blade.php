<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <form action="/login/proses" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
            Email :
            <input type="text" name="email"> <br/>
            password :
            <input type="password" name="password"> <br/>
            <input type="submit" value="Login">
        </form>
    </body>

</html>