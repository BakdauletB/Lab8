<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill user form</title>
    <style>
    body{
        text-align: center;
        padding: 10px;
    }
    
    </style>
</head>
<body>
    <h1>Fill the form</h1>
    <form method = "POST" action="{{ route('add-user') }}" enctype="multipart/form-data">
        @csrf
          <input type="text" name="name" placeholder="name">
          <input type="text" name="surname" placeholder="surname">
          <input type="email" name="email" placeholder="email">
          <input type="file" name="photo" placeholder="photo" accept="image/jpeg, image/png">
          <input type="submit" name="submit" placeholder="submit" value="Submit">
</body>
</html>