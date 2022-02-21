



<?php 
if(isset($_POST['generate-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $img_name = $_FILES['upload-img']['name'];
    $tmp_name = $_FILES['upload-img']['tmp_name'];
    move_uploaded_file($tmp_name, "upload/".$img_name);


    // $fileToUpload = $_FILES['fileToUpload']['name'];
    // $fileToUpload_tmp = $_FILES['fileToUpload']['tmp_name'];
    // move_uploaded_file($fileToUpload_tmp, "img/".$fileToUpload);
    

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

        <img  src="upload/<?php if(isset($img_name))
        {echo $img_name;} ?>" alt="#">
</div>













<!-- design korte hobe -->






</body>
</html>