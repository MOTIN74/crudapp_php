<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
   <form action="img.php" method="POST" enctype="multipart/form-data">
   <label>Username</label> <br>
    <input type="text" name="username" value=""><br>
    <label>email</label> <br>
    <input type="text" name="email" value=""><br>
    <label>phone</label> <br>
    <input type="text" name="phone" value=""><br>
    <label>password</label> <br>
    <input type="text" name="password" value=""><br><br>
    <input type="file" name="upload-img">
    <br><br>
    <input  type="submit" name="generate-btn" value="Genetate ID">








   </form>




</body>
</html>