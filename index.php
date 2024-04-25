<?php
if(isset($_GET['signup']) && $_GET['signup'] == 'success') {
    echo "<script>window.onload = function() { alert('You have signed up successfully'); }</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MambaManor</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <!--Our Header -->
    <?php include 'top.php'; ?>
    <!--everything in the middle -->
    <div class="content">
        <div class="about-section">
            <div class="background-image">
                <img src="background.jpg" alt="Background Image">
            </div>
        </div>

        <div class="property-section">
            <div class="property-image">
                <img src="pic1.jpg" alt="Property Image">
            </div>
            <div class="property-text">
                <h2>Description of Project</h2>
                <p>MambaManor is an innovative real estate platform revolutionizing property buying experiences. With cutting-edge technology and user-centric design, we aim to redefine how individuals discover and purchase their dream properties.</p>
            </div>
        </div>
        <div class="property-section">
            
            <div class="property-text">
                <h2>What does our company do?</h2>
                <p>At MambaManor, we specialize in providing a seamless online marketplace for buying properties. Our platform offers a comprehensive database of listings, intuitive search functionalities, and personalized recommendations, ensuring users find their ideal homes effortlessly.</p>
            </div>
            <div class="property-image">
                <img src="pic2.jpg" alt="Property Image">
            </div>
        </div>
        <div class="property-section">
            <div class="property-image">
                <img src="pic3.jpg" alt="Property Image">
            </div>
            <div class="property-text">
                <h2>What kind of services do we provide?</h2>
                <p>We offer a range of services tailored to meet the diverse needs of our clients. From detailed property listings featuring high-quality images and virtual tours to expert assistance in navigating the buying process, MambaManor ensures every step of the property acquisition journey is smooth and rewarding.</p>
            </div>
        </div>
        <div class="property-section">
            <div class="property-text">
                <h2>Why choose us over other competitors?</h2>
                <p>Unlike traditional real estate websites, MambaManor combines advanced technology with a deep understanding of user preferences, resulting in a superior browsing and purchasing experience. Our commitment to innovation, transparency, and customer satisfaction sets us apart, making us the preferred choice for discerning property buyers.</p>
            </div>
            <div class="property-image">
                <img src="pic4.png" alt="Property Image">
            </div>
        </div>
        <div class="property-section">
            <div class="property-image">
                <img src="pic5.png" alt="Property Image">
            </div>
            <div class="property-text">
                <h2>Special Features</h2>
                <p>At MambaManor, we're dedicated to crafting homes as unique as Kobe Bryant's legacy. Inspired by his pursuit of greatness, we offer a handpicked selection of exceptional properties that embody Kobe's extraordinary character. Our customized database ensures each listing is a testament to excellence. And to elevate the experience further, we even showcase homes from animated worlds. Discover the essence of exclusivity with MambaManor.</p>
            </div>
        </div>
    </div>
    <!--footer -->
    <?php include 'bottom.php'; ?>
</body>
</html>





