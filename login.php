<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>login</title>
</head>
<body>

    <?php
	
        $uname=$_REQUEST["uid"];
        $pass =$_REQUEST["pwd"];
        if( strcmp($uname,"admin")==0 && strcmp($pass,"admin@123")==0 )
        {
            if ( isset($_COOKIE["loginerr"]) )
                setcookie("loginerr","",time()-1 );
                header('Location: http://localhost/xampp/10_login/details.php');

        }
        else
        {
            setcookie("loginerr","Invalid username or password, try again",time()+60);
            header('Location: http://localhost/xampp/10_login/loginform.php');
        }
        setcookie("username",$uname,time()+60);
         
        
        ?>
    
</body>
</html>