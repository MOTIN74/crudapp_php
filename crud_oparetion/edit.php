<?php
include("function.php");
$objCrudAdmin = new crudApp();

$students = $objCrudAdmin->display_data();

if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $id = $_GET['id'];
        $returndata = $objCrudAdmin->display_data_by_id($id);
        
    }
        
    }

    if(isset($_POST['edit_btn'])){
        $msg = $objCrudAdmin->update_data($_POST);
        
    } 
    


// if(isset($_POST['btn'])){
//     $std_name = $_POST['std_name'];
//     $std_email = $_POST['std_email'];
//     $std_phone = $_POST['std_phone'];
//     $std_address = $_POST['std_address'];
//     $std_img = $_FILES['std_img'];
// }
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD APP</title>
  </head>
  <body>
    <div class="container my-4 p-4 shadow">
    <h2> <a style="text-decoration:none" href="index.php">Freelancer Motin DB</a> </h2>

    <form class="form" action="" method="POST" enctype="multipart/form-data">



    <?php
        if(isset($msg)){
            echo $msg;
        }
    ?>
        <input class="form-control mb-2" type="text" name="u_std_name" value="<?php echo $returndata['std_name'];?>"> <br>
        <input class="form-control mb-2" type="text" name="u_std_email" value="<?php echo $returndata['std_email'];?>"> <br>
        <input class="form-control mb-2" type="text" name="u_std_phone" value="<?php echo $returndata['std_phone'];?>"> <br>
        <input class="form-control mb-2" type="text" name="u_std_address" value="<?php echo $returndata['std_address'];?>"> <br>
        <input class="form-control mb-2" type="file" name="u_std_img"> <br>
        <input type="hidden" name="std_id" value="<?php echo $returndata['id'];?>">
        <input type="submit" name="edit_btn" value="Update Information" class="form-control bg-warning">



    </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>