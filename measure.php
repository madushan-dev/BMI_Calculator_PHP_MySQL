<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Measure</title>
  </head>
  <body>
    <section id="wrapper">
      <div class="content">
        <div class="title sub">
          <h1>Measure</h1>
        </div>
        <div>
          <div class="date-time">
            <div id="date"></div>
            <div id="time" class="clock" onload="showTime()"></div>
          </div>
          <form name="measure" action="process/process_measure.php" method="POST" onsubmit="return validateForm()">
          <div class="form-group">
            <label for="weight">WEIGHT :

              <p id="weightvalid" style="font-size:12px;text-align:center;color:red"></p>
            </label>
            
            
           
            <div class="form-item">
              <input
                type="text"
                name="weight"
                id="weight"
                placeholder="Enter Weight"
              />KG
              
            </div>
            
          </div>
         
          
          <br />
          <div class="form-memo">
            <textarea name="memo" id="" class="memo"></textarea>
          </div>
          <p id="memovalid" style="font-size:12px;text-align:center;color:red"></p>
        </div>
        <div class="button-group sub-group">
          <button type="submit" class="item-button sub-button">
            SUBMIT
          </button>
    
          <button class="item-button sub-button">
            <a href="index.php"> Back</a>
          </button>
        </div>
        </form>
      </div>
    </section>
  </body>
</html>

<script>
  n = new Date();
  y = n.getFullYear();
  m = n.getMonth() + 1;
  d = n.getDate();
  document.getElementById("date").innerHTML = "Date : " + y + "/" + m + "/" + d;

  function showTime() {
    var date = new Date();
    var h = date.getHours(); 
    var m = date.getMinutes();
    var s = date.getSeconds();
    var session = "AM";

    if (h == 0) {
      h = 12;
    }

    if (h > 12) {
      h = h - 12;
      session = "PM";
    }

    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;

    var time = "Time : " + h + ":" + m + ":" + s + " " + session;
    document.getElementById("time").innerText = time;

    setTimeout(showTime, 1000);
  }

  showTime();

// Validation
function validateForm() {
  document.getElementById("weightvalid").innerText = "";
  document.getElementById("memovalid").innerText = "";


  let x = document.forms["measure"]["weight"].value;
  let y = document.forms["measure"]["memo"].value;


  if (x == "" || isNaN(x)) {
    let text = "Enter a valid weight !"
    document.getElementById("weightvalid").innerText = text;
       return false;
  }

  if (y == "" ) {
    let text = "Enter memo !"
    document.getElementById("memovalid").innerText = text;
       return false;
  }
}


</script>
