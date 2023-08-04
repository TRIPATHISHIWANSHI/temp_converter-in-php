<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
       body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    header {
      background-color: #6c63ff;
      color: white;
      padding: 20px 0;
    }
    h1{
      text-align:center ;
      line-height: 20vh;
    }
    .main-div{
      width: 100%;
      height: 80vh;
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .left-side{
      background-color: #dfe6e9;
      border-radius: 50%;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .left-side img{
      width: 100%;
      height: auto;
      border-radius: 50%;
    }
    .right-side{
      width: 400px;
      height: 300px;
      background-color:darkblue;
      border-radius: 15px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .input1{
      width: 250px;
      height: 40px;
      padding: 5px;
      outline: none;
      border-radius: 1px solid grey;
      border-radius: 5px;
    }
    .selection{
      width: 100%;
      margin: 20px 0;
    }
    .btn{
      padding: 10px 16px;
      border-radius: 5px;
      outline: none;
      border-radius: none;
      background-color: #6c63ff;
      color: white;
      font-size: 0.9em;
    }
    .res {
      margin-top: 20px; /* Add some margin at the top */
      text-align: center;
    }

    
    </style>
</head>
<body>
  <header>
    <h1>Temperature Converter</h1>
    <div class="main-div">
      <div class="left-side">
        <img src="https://th.bing.com/th/id/OIP.oL1kXphJT9ufvSEwEMwxjAHaHa?w=191&h=190&c=7&r=0&o=5&pid=1.7">
      </div>
      <div class="right-side">
        <form method="post">
          <input type="text" name="num" placeholder="enter the temperature" class="input1">
          <div class="selection">
            <label>CELSIUS:</label>
            <input type="radio" name="units" value="cel">
            <label>FARENHEIT</label>
            <input type="radio" name="units" value="feh">
          </div>
          <input type="submit" class="btn" name="submit" value="convert now">
        </form>
      </div>
      <p class="res">
        <?php
        if(isset($_POST['submit']))
        {
          $num=$_POST['num'];
          $temp=$_POST['units'];
          if($temp=="cel"){
            $result=$num*9/5+32;
            echo "The conversion value of celsius in fahrenheit is:", $result;
          }
          else{
            $result=($num-32)*5/9;
            echo "The conversion value of celsius in fahrenheit is:". $result;
          }
        }
        ?>
      </p>
    </div>
  </header>
</body>
</html>
