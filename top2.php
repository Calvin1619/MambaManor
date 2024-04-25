<link rel="stylesheet" href="mainpageStyles.css">
<body>
    <header id="myHeader">
        <div class="logo">
            <img src="name.png" alt="Logo">
        </div>
        <div class="header-content">
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
                echo '<div class="welcome-message">';
                echo '<span style="color: #4F772D;">Welcome, ' . $_SESSION['username'] . '</span>';
                echo '</div>';
                echo '<div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>'; 
                echo '<div class="menu-options" id="menuOptions" style="display:none;">';
                echo '<ul>';
                echo '<li><a href="wishlist.php">Wishlist</a></li>';
                echo '</ul>';
                echo '</div>';
            } else {
                echo '<button onclick="togglePopup()">Sign-Up/ Login</button>';
            }
            ?>
        </div>
    </header>
    <div class="header-line"></div>
    <script>
        function toggleMenu() {
            var menuOptions = document.getElementById('menuOptions');
            if (menuOptions.style.display === "none") {
                menuOptions.style.display = "block";
            } else {
                menuOptions.style.display = "none";
            }
        }
    </script>
</body>
</html>



