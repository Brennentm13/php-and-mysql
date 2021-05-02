<!DOCTYPE html>
<html>
    <body>
<?php
$username = "localhost";
$username = "root";
$password = "";
$db = "people";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!conn) {
    die("Connection Failed" . mysqli_connect_error());
} 
    $sql = "SELECT * FROM persons";
    $result = $conn->query($sql);

    ?>
    <?php if($result->num_rows > 0){
        echo "here are some cool people: <br>";
       foreach ($result as $person){ ?>
         <li> <?php echo"ID: " . $person['id'] . "<br>";
           echo"name: " . $person['name'] . "<br>";
           echo"age: " . $person['age'] . "<br>";
           echo"job: " . $person['job'] . "<br>";
           echo"networth:  $" . $person['networth'] . "<br>"; ?></li>
    <?php   }
    } else {
        echo "There are 0 results";
    }?>
    </body>
</html>