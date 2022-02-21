

<?php 
if(isset($_POST['btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    

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
    
}




?>

<!-- displaying the data -->

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