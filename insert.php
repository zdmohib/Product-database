<?php
class User {
  // Properties
  public $name;
  public $quantity;
  public $description;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

 function set_quantity($quantity) {
    $this->quantity = $quantity;
  }
  function get_quantity() {
    return $this->quantity;
  }

 function set_description($description) {
    $this->description = $description;
  }
  function get_description() {
   return $this->description;
  }



}

?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

$u = new User();

$u->set_name($_POST["name"]);
$u->set_quantity($_POST["quantity"]);
$u->set_description($_POST["description"]);


$name= $u->get_name();

$quantity= $u->get_quantity();

$description= $u->get_description();


// Create connection
$conn = new mysqli($servername, $username, $password, $testdb);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO product (name, quantity, description)
VALUES ($name,$quantity,$description)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>