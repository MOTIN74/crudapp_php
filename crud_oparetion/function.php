<?php

class crudApp{
    private $conn;

    public function __construct(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "crudapp";

        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(!$this->conn){
            die("Connection failed !!!");
        }
    }
//add data
    public function add_data($data){
        $std_name = $data['std_name'];
        $std_email = $data['std_email'];
        $std_phone = $data['std_phone'];
        $std_address = $data['std_address'];
       $std_img = $_FILES['std_img']['name'];
        $tmp_name = $_FILES['std_img']['tmp_name'];


        $query = "INSERT INTO students (std_name,std_email,std_phone,std_address,std_img) VALUES ('$std_name','$std_email',$std_phone,'$std_address','$std_img')";

        if(mysqli_query($this->conn,$query));
         {   move_uploaded_file($tmp_name,"upload/".$std_img);
            return "Information added sucssfully";
            // 
            // header("Location:index.php");
        }
        // if($result){
        //     header("Location:index.php");
        // }else{
        //     echo "Error !!!";
        // }
    } 
    //display data
    public function display_data(){
        $query = "SELECT * FROM students";
        if(mysqli_query($this->conn,$query)){
            $returndata = mysqli_query($this->conn,$query);
            return $returndata;
        }
        
        // if(mysqli_num_rows($result) > 0){
        //     while($row = mysqli_fetch_assoc($result)){
        //         $data[] = $row;
        //     }
        //     return $data;
        // }
    }

    //edit data
    public function display_data_by_id($id){
        $query = "SELECT * FROM students WHERE id = $id";
        if(mysqli_query($this->conn,$query)){
            $returndata = mysqli_query($this->conn,$query);
            $studentData = mysqli_fetch_assoc($returndata);
            return $studentData;
        }
        
       
    }

    public function update_data($data){
        $std_name = $data['u_std_name'];
        $std_email = $data['u_std_email'];
        $std_phone = $data['u_std_phone'];
        $std_address = $data['u_std_address'];
        $std_img = $_FILES['u_std_img']['name'];
        $tmp_name = $_FILES['u_std_img']['tmp_name'];
        $idno = $data['std_id'];

        $query = "UPDATE students SET std_name = '$std_name',std_email = '$std_email',std_phone = $std_phone,std_address = '$std_address',std_img = '$std_img' WHERE id = $idno";

        if(mysqli_query($this->conn,$query));
         {   move_uploaded_file($tmp_name,"upload/".$std_img);
            return "Information updated sucssfully";
            // 
            // header("Location:index.php");
        }



    }

    //delete data
    public function delete_data($id){
        $catch_img = "SELECT * FROM students WHERE id = $id";
        $delete_std_info = mysqli_query($this->conn,$catch_img);
        $std_infoDle = mysqli_fetch_assoc($delete_std_info);
        $deleteImg_data = $std_infoDle['std_img'];
        $query = "DELETE FROM students WHERE id = $id";
        if(mysqli_query($this->conn,$query)){
            unlink("upload/".$deleteImg_data);
            return "Information deleted sucssfully";
        }
    }
    























}
?>