


<?php 
if(isset($_POST['generate-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $fileToUpload = $_POST['fileToUpload'];
    

    if($username == ''){
        echo "username is required";
    }
    if($email == ''){
        echo "email is required";
    }
    if($phone == ''){
        echo "phone is required";
    }
    if($password == ''){
        echo "password is required";
    }

    // if($username != '' && $email != '' && $phone != '' && $password != '' && $fileToUpload != ''){
    //     echo "username: $username <br>";
    //     echo "email: $email <br>";
    //     echo "phone: $phone <br>";
    //     echo "password: $password <br>";
    //     echo "fileToUpload: $fileToUpload <br>";
    // }
    
    
}




?>

<!-- displaying the data -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<article>
   <div class="">
   <img style="width: 25%" src="https://images.unsplash.com/photo-1508919801845-fc2ae1bc2a28?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aW1nfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="">
   </div>

<div>
    
<h2>Username - <?php 
        if(isset($username)){
            echo $username;
        }
        ?> </h2>

        <h2> Email- <?php if(isset($email)){
            echo $email;
        }

        ?> </h2>

        <h2> phone - <?php if(isset($phone)){
            echo $phone;
        } ?> </h2>

        <h2> Password - <?php if(isset($password)){
            echo $password;
        } ?> </h2>
</div>




</article>








<!-- design korte hobe -->






</body>
</html>