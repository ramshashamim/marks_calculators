<?php
include "connection.php";
session_start();
echo $_SESSION['user'];
?>
<?php

$computer = "computer";
$maths = "maths";
$english = "english";
$chemistry = "chemistry";
$physics = "physics";
$islamiat = "islamiat";

$total = 600;

if (isset($_POST["submit"])){
    
    $subjectArray = [
        'computer' => $_POST['computer'],
        'maths' => $_POST['maths'],
        'english' => $_POST['english'],
        'chemistry' => $_POST['chemistry'],
        'physics' => $_POST['physics'],
        'islamiat' => $_POST['islamiat'],
    ];
    

    
    $marksSecure = array_sum($subjectArray);

    

    $percentage = $marksSecure/$total*100;

   
    

    
    


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1>Calculate Your Marks</h1>
    <div class="wrapper">
      <form action="./main.php" method="post" class="form__a">
        <h2>ENTER YOUR MARKS</h2>

        <div class="input-field">
        <input type="number" name="computer"  required />
          <label>ENTER YOUR COMPUTER MARKS</label>
        </div>
        <div class="input-field">
        <input type="number" name="english"  required />
          <label>ENTER YOUR ENGLISH  MARKS</label>
        </div>
        <div class="input-field">
        <input type="number" name="maths"  required />
          <label>ENTER YOUR MATHS MARKS</label>
        </div>
        <div class="input-field">
        <input type="number" name="chemistry"  required />
          <label>ENTER YOUR CHEMISTRY MARKS</label>
        </div>
        <div class="input-field">
        <input type="number" name="physics"  required />
          <label>ENTER YOUR PHYSICS MARKS</label>
        </div>
        <div class="input-field">
        <input type="number" name="islamiat"  required />
          <label>ENTER YOUR ISLAMIAT MARKS</label>
          <button type="submit" name="submit" value="submit">CALCULATE RESULT</button>
      </form>
       <div class="register">
        
      </div> 
    </div>
    
</body>
</html>