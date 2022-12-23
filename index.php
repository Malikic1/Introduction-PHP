<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Introduction</title>
  </head>
  <body>
  <form action="index.php" method="post">
       Password: <input type="password" name="password" /><br/>
        <input type="submit">
    </form>
    Password: <?php echo $_POST["password"]?><br>
    
    <br><br><br>


  <form action="index.php" method="get">
       Color: <input type="text" name="color" /><br/>
         Plural noun: <input type="text" name="plural" /><br/>
        Celebrity: <input type="text" name="celebrity" /><br/>
        <input type="submit">
    </form>
      <?php
      $color = $_GET["color"];
      $pluralNoun = $_GET["plural"];
      $celebrity = $_GET["celebrity"];

      echo "Roses are $color <br/>";
      echo "$pluralNoun are blue <br/>";
      echo "Roses are $celebrity <br/>";
      ?>

 <br><br><br>

    <?php 
    echo "<h1>hello world</h1>";
    print("<hr/>");
    echo("<h3>My name is Azeez</h3>");
    $name = "malik";
    $age = 5;
    echo strtoupper("My name is $name and I am $age years old <br>");
    echo 5 * 5;
    echo"<br>";
    $num = 3.2; 
    echo round($num);
    echo"<br>";
    echo ceil($num);
    echo"<br>";
    echo floor($num);
    ?>

<br><br><br>

    <form action="index.php" method="get">
       Fisrst Name: <input type="text" name="FirstName" /><br/>
        Last Name: <input type="text" name="LastName" /><br/>
        Email: <input type="email" name="email" /><br/>
        Age: <input type="number" name= "age"/><br/>
        <input type="submit">
    </form>
    <br/>
    Your first name is <?php echo $_GET["FirstName"] ?><br>
    Your last name is <?php echo $_GET["LastName"] ?><br>
    Your email is <?php echo $_GET["email"] ?><br>
    Your age is <?php echo $_GET["age"] ?>

<br><br><br>

      <form action="index.php" method="get">
           <input type="number" name="num1" placholder="enter a number" /><br/>
            <input type="number" name="num2" placholder="enter another number"/><br/>
            <input type="submit">
    </form>
   Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?><br>
 <br><br><br>

 <form action="index.php" method="post">
       Apple: <input type="checkbox" name="fruit[]" value="apple"/><br/>
       Banana: <input type="checkbox" name="fruit[]" value="banana"/><br/>
       Guava: <input type="checkbox" name="fruit[]" value="guava"/><br/>
        <input type="submit">
    </form>
    <?php
    $fruit = $_POST["fruit"];
    echo $fruit[0] ?><br>
<br><br><br>

<?php
$fruits = array("apple","banana", "guava","banana" );
$fruits[4] = 400 ;
$fruits[2] = "pineapple";
echo "$fruits[4] <br>";
echo $fruits[2];
echo "<br>";
echo count($fruits)

?>
<br>
<!-- associative arrays -->
<form action="index.php" method="post">
           <input type="text" name="student" placholder="enter your name" /><br/>
            <input type="submit">
    </form>
<?php 
$grades = array("Azeez" => "A1", "Malik" => "C4", "Ola" => "B3" );
echo $grades[$_POST["student"]]
?>


<?php
function sayHi($name, $age){
  echo "Hello $name, you are $age years old <br> ";
}
sayHi("Azeez", 12);
sayHi("Malik", 18);
?>

<?php
function sayHi($numb){
 return "$name, you are $age years old <br>"
};
sayHi("Azeez", 12);
sayHi("Malik", 18);
?>










  </body>
</html>
