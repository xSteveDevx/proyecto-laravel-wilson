<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background: rgb(0,109,119);
background: linear-gradient(90deg, rgba(0,109,119,1) 0%, rgba(131,197,190,1) 45%);  
        }
        .container{
            background-color: #eaf4f4;
            
            margin-top: 10%;
            text-align: center;
            border-radius : 20px;
        }
        label{
            font-family: 'Golos Text', sans-serif;
            font-size: 1.7rem;
        }
        input{
         border-radius:10px;
         /* background: #83c5be; */
         border: solid 1px #6b9080;
        }
        input::placeholder{
            text-align: center;    
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Golos+Text&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    @yield('body')
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>