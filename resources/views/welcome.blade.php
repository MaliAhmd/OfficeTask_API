<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HONOR LiNK DEMO</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <style>
   
    </style>
</head>
<body>
    <div class="logincon">
        <div class="h1">
            <h1>LOGIN</h1>
        
        <form method="post" action="{{route('login')}}">
        @csrf
        <div class="input">
            <input class="ed" type="text" name="userid" placeholder="ID" required>
        </div>
        <div class="input">
            <input class="ed" type="password" name="password" placeholder="PASSWORD" required>
        </div>
        <div>
            <button type=""submit class="btnlogin">Login</button>
        </div>
        </div>
        </form>
    </div>
    
</body>
</html>