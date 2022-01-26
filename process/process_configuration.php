<?php include_once '../database/db.php';?>


<?php
if(isset($_POST)){
 
    if(!empty($_POST['gender']) && !empty($_POST['height']))
    {
        $date = $date = date('Y-m-d H:i:s');
        $height = $_POST['height'];
        $gender = $_POST['gender'];

        $sql = "UPDATE height SET height ='$height' , seibetu = '$gender' , modified = '$date' WHERE id = '1'";
        $result  = mysqli_query($conn,$sql);

       

        if($result){
            header("Location: ../index.php");
        }
    }
   

}


?>