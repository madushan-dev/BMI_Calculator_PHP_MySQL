<?php include_once 'database/db.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Weight Management System</title>
  </head>
  <body>
    <section id="wrapper">
      <div class="content">
        <div class="title">
          <h1>weight management</h1>
        </div>
        <div class="button-group" style="margin-top: 50px; margin-bottom: 50px">
        <a href="measure.php" class="btn-link"><button class="item-button">
             measure
          </button></a>
          <a href="history.php" class="btn-link"> <button class="item-button">
           Measurement history
          </button></a>
          <a href="configuration.php" class="btn-link"> <button class="item-button">
            Configuration
          </button></a>
        </div>
      </div>
    </section>
  </body>
</html>
