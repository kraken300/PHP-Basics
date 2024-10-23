<?php
$insert = false;
if(isset($_POST["name"])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $conn = mysqli_connect($server, $username, $password);

    // Checking connection
    if(!$conn){
        die("Connection to the DB failed : ". mysqli_connect_error());
    }
    // echo "Successfully connected to DB";

    // Collect POST variables
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $desc = $_POST["desc"];

    // Create query
    $sql = "INSERT INTO `form`.`travelform` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

    // Execute the query
    if($conn -> query($sql) == true){
        // echo "Form submitted successfully!";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "Error: $sql <b> $conn->error";
    }

    // Close the DB connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Trip Form</h1>
        <p>Fill the form and submit it to confirm you participation</p>

        <?php 
        if($insert == true){
            echo "<p class='message'>Form submitted successfully!</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" id="name" name="name" placeholder="Enter your name">

            <input type="text" id="age" name="age" placeholder="Enter your age">

            <input type="text" id="gender" name="gender" placeholder="Enter your gender">

            <input type="email" id="email" name="email" placeholder="Enter your email">

            <input type="text" id="phone" name="phone" placeholder="Enter your phone no.">

            <textarea name="desc" id="desc" cols="30" rows="8"
                placeholder="Enter any suggestions or queries"></textarea>

            <div>
                <button class="btn">Submit</button>
                <button type="reset" class="btn">Reset</button>
            </div>

        </form>
    </div>
</body>

</html>
