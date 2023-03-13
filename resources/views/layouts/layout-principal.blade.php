<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        body{
            background: rgb(0,109,119);
background: linear-gradient(90deg, rgba(0,109,119,1) 0%, rgba(131,197,190,1) 45%);
        }
        
        .navbar{
            height: 50px;
            width: 100%;
            display: flex;
            
             
        
        }
        
        ul{
            display: flex;
        }
        ul li{
            list-style: none;
        }
        
        a:hover{
            color:#cad2c5;
        }
        a{
            text-decoration: none;
            color: white;
            font-size: 1.1rem;
        }
        
    </style>
</head>
<body>
    <nav class="navbar mt-0" style="background: #2f3e46;">
        <div class="container-fluid">
            <ul>
                <li><a href="/principal">Menu principal</a></li>
                <li class="ps-4"><a href="/principal" >Dashboard</a> </li>
                <li class="ps-4"><a href="/create-yarn" >Crear Hilo</a> </li>
            </ul>
    </div>
    </nav>
    @yield('body')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>