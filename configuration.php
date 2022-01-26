<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Configuration</title>
  </head>
  <body>
    <section id="wrapper">
      <div class="content">
        <div class="title sub">
          <h1>Configuration</h1>
        </div>
        <div>

          <form name="config"action="process/process_configuration.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
              <label for="height">GENDER :

              </label>
              <div class="gender">
                <input
                  type="radio"
                  name="gender"
                  id=""
                  value="1"
                  checked
                />  Male &nbsp;&nbsp;
                <input
                type="radio"
                name="gender"
                id=""
                value="0"
              /> Female
              </div>
            </div>
            <div class="form-group">
              <label for="height">Height :
                <p id="heightvalid" style="font-size:12px;text-align:center;color:red"></p>
              </label>
              <div class="form-item">
                <input
                  type="text"
                  name="height"
                  id=""
                  placeholder="Enter Height"
                />cm
              </div>
            </div>
        </div>
        <div class="button-group sub-group">
          <button type="submit" class="item-button sub-button">
           SUBMIT
          </button>
          <button class="item-button sub-button">
            <a href="index.php"> Back</a>
          </button>
        </div>
      </div>
    </section>


    <script>
      // Validation
        function validateForm() {
           document.getElementById("heightvalid").innerText = "";


          let x = document.forms["config"]["height"].value;
      


          if (x == "" || isNaN(x)) {
            let text = "Enter a valid height !"
            document.getElementById("heightvalid").innerText = text;
              return false;
          }
        }
    </script>
  </body>
</html>