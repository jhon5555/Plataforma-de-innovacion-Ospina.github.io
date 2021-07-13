<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login / Plataforma de innovacion</title>
   
  
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<style>
        
        body{
            background-image: url(images/2.6.jpg);
        }
        
        .welcome{
            width: 100%;
            max-width: 600px;
            margin: auto;
            margin-top: 100px;
            background: rgba(0,0,0,0.6);
            text-align: center;
            padding: 20px;
        }
        
        .welcome img{
            width: 120px;
            height: 120px;
            text-align: center;
        }

        .welcome h1{
            font-size: 50px;
            color: white;
            font-weight: 100;
            margin-top: 20px;
        }
        
        .welcome a{
            display: block;
            margin-top: 40px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid white;
        }
        
        .welcome a:hover{
            color: black;
            background: white;
        }
        
    
    </style>
    
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="images/9999.jpg" alt="">
                <h2>Plataforma de innovacion</h2>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login active">Login</li></a>
                <a href="register.php"><li class="module-register">Register</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Bienvenido</h1><h2>A Nuestra Plataforma de innovacion</h2></div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            
             <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Entrar<label class="lnr lnr-chevron-right"></label></button>
        </form>
    </div>
    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>