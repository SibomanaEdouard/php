
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGE THE BASE </title>
   <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

body {
    margin: 0;
    background-color: rgb(186, 224, 255);
    font-family: 'Poppins', sans-serif;
}
h2 {
    font-size: 28px;
    animation: color1 5s infinite;
    font-family: Rockwell;
}
@keyframes color1 {
    0%{
        color: rgb(44, 124, 216);
    }
    50%{
        color: white;
    }
    100%{
        color: white;
    }
}
label{
    font-family: 'Poppins', sans-serif;

}
input:hover{
    transition: all 50ms;
    opacity: 80%;
}
input:focus{
    background-color: rgb(0, 0, 39);
    color: white;    
}

input {
    width: 200px;
    height: 30px;
    border-radius: 5px;
    border: none;
    box-shadow: 0px 0px 10px;
    opacity: 80%;
    font-family: 'Poppins', sans-serif;
}


button {
    background-color: rgb(56, 255, 195);
    width: 110px;
    border: none;
    cursor: pointer;
    opacity: 100%;
    height: 30px;
    border-radius: 10px;
    font-family: 'Poppins', sans-serif;
}
button:hover {
    width: 145px;
    height: 34px;
    box-shadow: 0px 0px 25px;
    border: none;
    transition: all 300ms ease-in-out;
}
.div {
    margin-top: 50px;
    width: 450px;
    height: 450px;
    background-color: rgb(44, 124, 216);
    border-radius: 10px;
}

</style>
	</head>
<body>
<center>
    <div class="div">
    <h2>Base-conveter</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
<label for="number">NUMBER</label><br><br>
<input type="text" name="number" placeholder="Enter your number" required/><br><br>
<label for="bnumber">OLD BASE</label><br><br>
<input type="number" name="bnumber" placeholder="Enter your OLD base" required/><br><br>
<label for="fnumber">NEW BASE </label><br><br>
<input type="number" name="fnumber" placeholder="Enter new base"reuired/><br><br><br>
<button>Convert</button>  
</div> 
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number=$_POST['number'];
    $bnumber=$_POST['bnumber'];
    $fnumber=$_POST['fnumber'];
    $result= base_convert($number,$bnumber,$fnumber);
?>
CONVERSION OF : <?php echo $number;?><br>
FROM BASE : <?php echo $bnumber;?><br>
TO : <?php echo $fnumber;?><br>
IS <?php echo $result ;?><br>
<?php
}
?>

</body>
</html>
