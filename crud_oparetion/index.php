<?php
include("function.php");
$objCrudAdmin = new crudApp();
if(isset($_POST['add-info'])){
    // $data = $_POST;
    $return_msg = $objCrudAdmin->add_data($_POST);
}
$students = $objCrudAdmin->display_data();

if(isset($_GET['status'])){
    if($_GET['status'] == 'delete'){
        $delete_id = $_GET['id'];
        $delmsg = $objCrudAdmin->delete_data($delete_id);
        
    }
        
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
    <?php if(isset($delmsg)) {
        echo $delmsg;
    } ?>
      
    <form class="form" action="" method="POST" enctype="multipart/form-data">

    <?php
        if(isset($return_msg)){
            echo $return_msg;
        }
    
    
    
    
    
    ?>
        <input class="form-control mb-2" type="text" name="std_name" placeholder="Student Name"> <br>
        <input class="form-control mb-2" type="text" name="std_email" placeholder="Student Email"> <br>
        <input class="form-control mb-2" type="text" name="std_phone" placeholder="Student Phone"> <br>
        <input class="form-control mb-2" type="text" name="std_address" placeholder="Student Address"> <br>
        <input class="form-control mb-2" type="file" name="std_img"> <br>
        <input type="submit" name="add-info" value="Add Information" class="form-control bg-warning">



    </form>
    </div>

    <div class="container my-4 p-4 shadow">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
            while ($student = mysqli_fetch_assoc($students)) { ?>

            <tbody>
                <tr>
                    <td><?php echo $student['id']?></td>
                    <td><?php echo $student['std_name']?></td>
                    <td><?php echo $student['std_email']?></td>
                    <td><?php echo $student['std_phone']?></td>
                    <td><?php echo $student['std_address']?></td>
                    <td><img style="height: 100px;" src="upload/<?php echo $student['std_img']?>" alt=""> </td>
                    <td>
                        <a class="btn btn-success" href="edit.php?status=edit&&id=<?php echo $student['id']?>">Edit</a>
                        <a class="btn btn-danger" href="?status=delete&&id=<?php echo $student['id']?>">Delete</a>
                    </td> 
                </tr>
                <?php } ?>
            </tbody>
        </table>
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