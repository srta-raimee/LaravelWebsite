<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <script src="./js/script.js"></script>
    <link rel="icon" type="image/png" href="/img/butterfly.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>
   
    <div class="menu">
                    <a href="/"><img id = "img" src="/img/butterfly.png" widght=100px height=80px></a>
                    <div class='menus'>
                        <a href="/" id="home"><strong>Home</strong></a>
                
                        <a href="/parties/create" id="party"><strong>Create a Party</strong></a>
                    
                        <a href="/signin" id="signin"><strong>Sign In</strong></a>
                    
                        <a href="/signup"  id="signup"><strong>Sign Up</strong></a>
                    </div>
                    
    </div>  
</br>
    <div id="content">
        @yield('content')
    </div>
    <footer>
    <div id='pe'>
    <a
    </br><strong>Raimee Studios &copy; 2023</strong>
    </div>
    </footer>
    
</body>
</html>