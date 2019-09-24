<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>document</title>
        </head>
        <body>
<!--
            <a href="#">home</a>
            <a href="#">about us</a>
            <a href="#">links</a>
            <a href="#">contact us</a>
-->
            
            <?php
//$x = 75;
//$y = 25;
// 
//function addition() {
//    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
//}
// 
//addition();
//echo $z;
?>
       <?php
//echo $_SERVER['PHP_SELF'];
//echo "<br>";
//echo $_SERVER['SERVER_NAME'];
//echo "<br>";
//echo $_SERVER['HTTP_HOST'];
//echo "<br>";
?>

       <?php
            $name="";$nameErr="";
if ($_SERVER["REQUEST_METHOD"] =="POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($_POST["name"])) {
        $nameErr="Name is required"
    } else {
        $name =$_POST["name"];
        echo $name;
    }
}
?>
       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  Name: <input type="text" name="name"><span>*</span><br>
  E-mail: <input type="text" name="email"> <br>
  Password: <input type="password" name="psw"> <br>
  <input type="submit" name="submit">
</form>
<!--       Welcome <?php //echo $_POST["names"]; ?><br>-->
<!--            Your email address is: <?php //echo $_POST["email"]; ?><br>-->
<!--            Your password is: <?php //echo $_POST["psw"]; ?><br>-->
            
           
        </body>
    </html>