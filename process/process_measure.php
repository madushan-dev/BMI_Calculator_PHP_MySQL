<?php include_once '../database/db.php';?>


<?php
if(isset($_POST)){
    
 
    if(!empty($_POST['weight']) && !empty($_POST['memo']))
    {
        $date = $date = date('Y-m-d H:i:s');
        $weight = $_POST['weight'];
        $memo = $_POST['memo'];

        
        $sql = "SELECT * FROM height WHERE id = '1'";
        $result  = mysqli_query($conn,$sql);
        $data = $result->fetch_assoc();

        $height = $data['height'];
        
        $bmi = $weight / (($height/100)*($height/100));
        $bmi = round($bmi,2);



        $sql = "INSERT INTO weight_management (keisokuday,weight,memo,bmi,modified) VALUES ('$date','$weight','$memo','$bmi','$date')";
        $result  = mysqli_query($conn,$sql);

       

        if($result){
            header("Location: ../history.php");
        }
    }
   

}


?>