<?php

$host       = "localhost"; 
$username   = "root"; 
$pass       = ""; 
$db         = "hendrikprofile"; 
$conn    = mysqli_connect($host, $username, $pass, $db); 

if (!$conn) {
    die("Not connected: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NATURE VIEWS</title>
    <style>
        body {
            background-image: url('9.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <header>
        <h1>NATURE VIEWS</h1>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="#home">Home</a>
        <a href="#gallery">Gallery</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Home Page -->
    <section id="home">
        <h2>Welcome to Nature's Beauty</h2>
        <p>Explore the wonders of nature with us.</p>
        <!-- Add content for home page -->
    </section>

    <!-- Gallery Page -->
    <section id="gallery">
        <h2>Gallery</h2>
        <div class="gallery-container">
            <img src="1.jpeg" alt="Forest" class="gallery-img">
            <img src="4.jpeg" alt="Forest" class="gallery-img">
            <img src="7.jpeg" alt="Forest" class="gallery-img">
            <img src="2.jpeg" alt="Mountain" class="gallery-img">
            <img src="5.jpeg" alt="Forest" class="gallery-img">
            <img src="8.jpeg" alt="Forest" class="gallery-img">
            <img src="3.jpeg" alt="Lake" class="gallery-img">
            <img src="6.jpeg" alt="Forest" class="gallery-img">
            <img src="9.jpeg" alt="Forest" class="gallery-img">
            <!-- Add more images as needed -->
        </div>
        <button id="loadMoreButton">Load More</button> <!-- Add Load More button -->
    </section>

    <!-- Blog Page -->
    <section id="blog">
        <h2>Blog</h2>
        <?php
            $query = "SELECT * FROM blog";
            $result = mysqli_query($conn, $query);

            $no = 1;

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($no >=0) {
            ?>
        <!-- Add blog articles here -->
        <article>
            <h3><?= $row["judul"] ?></h3>
            <p><?= $row["artikel"] ?></p>
        </article>
        <?php } 
            $no++;
            }
            } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);}
            ?>
    </section>

    <!-- Contact Page -->
    <section id="contact">
        <h2>Contact</h2>
        <div class="contact-container">
            <p>Email: <a href="mailto:heindrikmait026@student.unsrat.ac.id">heindrikmait026@student.unsrat.ac.id</a></p>
            <p>Contact: <a href="https://wa.link/muqur4">WhatsApp</a></p>
            <p>Instagram: <a href="https://www.instagram.com/rdix_mait/">Instagram</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; NATURE VIEWS</p>
    </footer>

    <!-- JavaScript -->
    <script>
        document.getElementById('loadMoreButton').addEventListener('click', function() {
            var galleryContainer = document.querySelector('.gallery-container');
            var newImage = document.createElement('img');
            newImage.src = '10.jpeg';
            newImage.alt = 'New Image';
            newImage.className = 'gallery-img';
            galleryContainer.appendChild(newImage);
        });
    </script>
</body>
</html>
