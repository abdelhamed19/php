<?php
class product 
{
  public static $pname="REDBULL";
  public $pid=1234;
  public static $pprice=35;
public static function red_bull_info()
{
  echo "From The Static Method "."<br>";
  echo product::$pname;

  echo "<br>";
  echo product::$pprice;
  echo "<br>";
}
}
$obj1= new product();
echo product::$pname."<br>";
echo product::$pprice."<br>";
product::red_bull_info();
echo "<br>";
echo "###################";
echo "<br>";


class menu
{
  public $food;
  const FORBIDEN="This is Forbiden";
  public static $sweets;
  public static function forb ($sweett)
  {
    self::$sweets=$sweett;
    return $sweett;
  }
  public function foo ($fod)
  {
    $this->food=$fod;
    return $fod;
  }
}
$menu_obj=new menu();
echo $menu_obj->foo("RICE")."<br>";
echo menu::FORBIDEN."<br>";
echo menu::forb("Cake");
echo "<br>";
echo "###################";
echo "<br>";


class vegtables extends menu
{
  public $vcolor;
  public static $vprice;
  public static function vvv()
  {
    self::$vprice=300;
    return self::$vprice."<br>".parent::FORBIDEN;
  }
}
echo vegtables::vvv();
echo "<br>";
echo "###################";
echo "<br>";


// Db Connection
class connection
{
   private $servername = "localhost";
   private $username = "root";
   private $password="";
   private $dbName="form";


   public function connect()
   {
    $dsn="mysql:host=".$this->servername.";dbname=".$this->dbName;
       $conn = new PDO($dsn, $this->username, $this->password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       return $conn;
   }
}

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";