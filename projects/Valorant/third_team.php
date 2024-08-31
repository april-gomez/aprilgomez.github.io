<?php
$conn = mysqli_connect('localhost', 'root', '', 'lc_db') or die ('Connection Failed.');

if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $ign_valo = mysqli_real_escape_string($conn, $_POST['ign_valo']);
    $number = $_POST['number'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $appointment_date = $_POST['appointment_date'];
    
    // Check if the username exists in the "users" table
    $check_username = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($check_username) == 0) {
        // If the username is not registered, show a pop-up alert
        echo "<script>alert('Username is not registered. Please register first to join our teams.');</script>";
    } else {
        // If the username is registered, insert the data into the "first_team" table
        $insert = mysqli_query($conn, "INSERT INTO third_team (username, first_name, last_name, ign_valo, number, email, appointment_date) VALUES('$username', '$first_name', '$last_name', '$ign_valo', '$number', '$email', '$appointment_date')") or die ('Query Failed.');
        
        if ($insert) {
            $message[] = 'Appointment made successfully. Wait for your assigned team on your email.';
        } else {
            $message[] = 'Appointment failed.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ascendant - Radiant</title>
        <link rel ="stylesheet" href ="./src/css/team.css">
    </head>

    <body>
        <header class = "header fixed-top">
            <div class = "container">
                <div class = "row align-items-center justify-content-between">
                    <nav class = "nav">
                        <a href="team.html" class="link-btn">BACK</a>
                    </nav>
                </div>
            </div>
        </header>

        <section class = "contact" id = "contact"> 
            <h1 class = "heading"> Join Our Team </h1>
            <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
            <?php
                if(isset($message)){
                    foreach($message as $message) {
                        echo '<p class = "message">' .$message. '</p>';
                    }
                }
            ?>
            <span> Username : </span>
            <input type = "text" name = "username" placeholder = "Enter your username." class = "box" required>
            <span> First Name : </span>
            <input type = "text" name = "first_name" placeholder = "Enter your first name." class = "box" required> 
            <span> Last Name : </span>
            <input type = "text" name = "last_name" placeholder = "Enter your last name." class = "box" required>
            <span> In Game Name: : </span>
            <input type = "text" name = "ign_valo" placeholder = "Enter your IGN." class = "box" required>
            <span> Your Number : </span>
            <input type = "number" name = "number" placeholder = "Enter your phone number." class = "box" required>
            <span> Your Email : </span>
            <input type = "email" name = "email" placeholder = "Enter your email." class = "box" required>
            <span> Appointment Date : </span>
            <input type = "datetime-local" name = "appointment_date" class = "box" required>
            <input type = "submit" value = "Join Our Team" name = "submit" class = "link-btn">
            </form>
        </section>
    </body>
</html>