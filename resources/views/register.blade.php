<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <form action="/register/store" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
            Nama :
            <input type="text" name="nama"/> <br/>
            password :
            <input type="password" name="password"/> <br/>
            email :
            <input type="text" name="email"/><br/>
            phone number:
            <input type="text" name="phone"/><br/>
            
            <input type="submit" value="Register"/>
        </form>
    </body>

</html>