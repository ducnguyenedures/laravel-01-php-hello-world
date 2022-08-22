<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" name="viewport"/>
    <title>HELLO WORLD</title>
    <base href="./"/>
</head>
<body>
<?php
$USER_NAME = "Phineas and Ferb";
$USER_AGE = 22;
$USER_SALARY = 1.001;
$isMale = true;
echo("Hello World, $USER_NAME");
echo("<br>");
$USER_NAME = "Duc";
echo("Hello, $USER_NAME");
echo("<br>");
echo $_GET["your_name"];
?>
<form action="site.php" method="get">
    YOUR NAME: <input type="text" id="your_name" name="your_name">
    <input type="submit">
</form>
<br>
Hello <?php
echo $_GET["your_name"];
echo("<br>");
function say($content){
    echo $content;
    echo $_GET["your_name"];
}
say("Hi");
echo("<br>");
say("Hello");
echo("<br>");

class User {
   public $name;
   private $age;
    function __construct()
    {
        $this->age = 22;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

}
echo("class User");
echo("<br>");
$user = new User();
$user->name ="Duc";
echo $user->name;
echo("<br>");
echo $user->getAge();
echo("<br>");
echo $user->setAge(25);
echo("<br>");
echo $user->getAge();
echo("<br>");

class Student extends User{

}
echo("class Student");
$student = new Student();
echo("<br>");
echo $student->getAge();
 ?>
</body>
</html>