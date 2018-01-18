<?php
//class Game {
//
//}
//$animals = array (
//    'horse' => 'konj',
//    'horse1' => 'konj1',
//    'horse2' => 'konj2',
//    'horse3' => 'konj3',
//    'horse4' => 'konj4',
//);
//
//foreach ($animals as $key => $value) {
//    echo "animal is : {$key} and value is : {$value}<br>";
//}
include 'test1.php';
echo '<br>';
const BR = '<br>';
$host = 'mariadb';
$dbname = 'drupal';
$user = 'drupal';
$password = 'drupal';

$dsn = 'mysql:host='. $host .';dbname='. $dbname;
try {
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected super".BR;
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

//insert
$name = 'mirerereko';
$email = 'mire@gmail.com';

$sql = 'INSERT INTO users (name,email) VALUES (:name, :email)';
$stmt = $conn->prepare($sql);
$stmt -> execute(['name' => $name,'email' => $email]);
//echo "User {$name} added".BR;

// blob image 
// $tmpName  = "ge.jpg";
// $fp = fopen($tmpName, 'r'); // read binary

// $stmt = $conn->prepare("INSERT INTO users ( data ) VALUES ( ? )");
// $stmt->bindParam(1, $fp, PDO::PARAM_LOB);
// $stmt->execute();

// die();


$sql = 'SELECT * FROM users';
$stmt = $conn->prepare($sql);
$stmt->execute(['name','email','created','data']);
$users = $stmt->fetchAll();
foreach ($users as $user){
    echo "User is : {$user->name} , and email is : {$user->email}. User created at : {$user->created}".BR;
};


$stmt = $conn->query('SELECT * FROM users');
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo $row['name'].BR;
}


// delete user


// $sql = "DELETE FROM users WHERE name=''";
// $conn -> exec($sql);

$sql = "DELETE FROM users WHERE id<101";
$conn -> exec($sql);

// create table

// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP
//     )";

// $conn -> exec($sql);
class Person {
    public $name;
    public $age;

    public function __construct ($name,$age) {
        $this -> name = $name;
        $this -> age = $age;
    }

    public function speak() {
        return $this->name .' is '. $this->age.' years old';
    }
}
$mire = new Person('Miretty',122);
echo $mire->speak().BR;

class Chain {
    public function name() {
        echo "prda";
        return $this; //mora zbog chainovanja metoda
    }

    public function surname() {
        echo "prdic";
    }
    static function staty() {
        echo "statista";
    }
}

$prda = new Chain;
$prda->name()->surname();
Chain::staty();  //poziva static metod bez instancirnja novog obj

$t = new DateTime();
echo BR;
echo $t->format('d/M/Y \a\t H:m');