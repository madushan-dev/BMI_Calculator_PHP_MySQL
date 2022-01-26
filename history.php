<?php include_once 'database/db.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>History</title>
  </head>
  <body>
    <section id="wrapper">
      <div class="content">
        <div class="title sub">
          <h1>History</h1>
        </div>
        <div>
          <table>
            <tr>
              <th>
                DATE & TIME
              </th>
              <th>
               WEIGHT (KG)
              </th>
              <th>
                BMI
              </th>
              <th>
                Memo
              </th>
            </tr>

            <?php
            
            $sql = "SELECT * FROM weight_management ORDER BY id ASC";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result) ){
            
            
            ?>

            <tr>
              <td><?php echo $row['keisokuday']  ?> </td>
              <td><?php echo $row['weight']  ?> </td></td>
              <td><?php echo $row['bmi']  ?> </td>
              <td><?php echo $row['memo']  ?> </td>
            </tr>

            <?php } ?>

          </table>
        </div>
        <div class="button-group sub-group">
      
          <button class="item-button sub-button">
            <a href="index.php"> Back</a>
          </button>
        </div>
      </div>
    </section>
  </body>
</html>
