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
                    <a href="/" class"nav-link" id="home">Home</a>
            
                    <a href="/parties/create" class"nav-link" id="party">Create a Party</a>
                
                    <a href="/signin" class"nav-link" id="signin">Sign In</a>
                
                    <a href="/signup" class"nav-link" id="signup">Sign Up</a>
                    
    </div>  
</br>
    <div id="content">
        @yield('content')
    </div>
    <div id='pe'>
    <footer>
    <a
    </br><strong>Raimee Studios &copy; 2023</strong>
    </footer>
    </div>
</body>
</html>