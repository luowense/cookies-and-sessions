<?php ?>
<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php';

session_destroy();
?>
<body>
<?php echo "<h1>You are now log out, Please log in again if you want to visit our website</h2>";?>


<p>Do you want to return to our homepage to discover the greatest cookies</p>
    <ul>
        <li>Yes, I want to return there <a href="index.php">Click Here</a></li>
        <li>No Way, I'm tired of your cookies <a href="https://www.google.com/">Click Here</a></li>
    </ul>


</body>




<?php require 'inc/foot.php'; ?>
