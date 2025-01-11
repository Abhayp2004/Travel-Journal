<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Travel Journal Website</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <div class="container">
            <h1>Conatct us</h1>
            <nav>
                <ul>
                    <li><a href="index.html"><u>Home</u></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="contact">
            <h2>Contact Us</h2>
            <form action="contactus.php" method="post" onsubmit="return validateForm()" >
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit" name="submit">Submit</button>
            </form>
        </section>
    </main>

</body>
</html>
<?php
if (isset($_POST["submit"])) {
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($email)) {
        echo "Invalid email";
    } else {
        echo "Your email is: " . $email;
    }
}
?>



