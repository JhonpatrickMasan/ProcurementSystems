<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (head section) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #D6D7D8f0;
            position: fixed;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        #menu {
            background-color: #2D349A;
            color: #fff;
            padding: 70px; /* Increased padding */
            text-align: center;
            position: fixed;
            top: 102px; /* Adjusted the top position */
            left: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            overflow: hidden; /* Hide overflow to prevent scroll bar due to pseudo-element */
            margin-right: 30px; /* Added margin to the right of the menu */
        }

        #menu::before {
            content: "";
            height: 2px;
            width: 100%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
            margin-bottom: 20px; /* Adjusted margin to create space between the separator and menu items */
        }

        #userPosition {
            color: #fff;
            margin-bottom: 10px; /* Added margin below the user's position */
        }

        #userName {
            color: #fff;
            font-weight: bold;
            margin-bottom: 10px; /* Added margin below the user's name */
        }

        #welcomeText {
            color: #fff;
            margin-bottom: 20px; /* Added margin below the welcome text */
        }

        #menu a {
            color: #fff;
            text-decoration: none;
            margin: 15px 0; /* Adjusted vertical margin */
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        #menu a i {
            margin-right: 10px; /* Added margin to the right of the icon */
        }

        #menu a:hover {
            text-decoration: underline;
        }

        #logout {
            color: #fff;
            text-decoration: none;
            margin-top: auto !important; /* Set margin-top to auto */
            font-size: 16px;
        }

        #topNav {
            background-color: #ffffff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo {
            width: 350px;
            height: auto;
        }

        #content {
            margin-top: 50px;
            margin-right: 50px;
            margin-left: 370px; /* Adjusted the margin-left of the content */
            margin-bottom: 50px;
            padding: 230px 50px; /* Adjusted padding height */
            text-align: center;
            background-color: #fff; /* Added white background */
            border-radius: 15px; /* Added rounded corners */
        }

        #welcomeMessage {
            font-size: 18px;
        }

        #searchBar {
            display: flex;
            align-items: center;
            position: relative;
            right: 25px;
        }

        #searchIcon {
            position: absolute;
            left: 15px;
            cursor: pointer;
            width: 20px;
            height: 20px;
            opacity: 0.8;
        }

        #searchInput {
            padding-left: 30px;
            border: none;
            border-radius: 8px;
            background-color: #F0F0F0;
            outline: none;
            width: 200px;
            height: 30px;
            margin-left: 10px;
            opacity: 1.0;
        }
    </style>
</head>
<body>
    <div id="menu">
        <div id="userPosition">Your Position</div>
        <div id="userName">Your Name</div>
        <div id="welcomeText">Welcome back!</div>
        <!-- Separator -->
        <a href="#Dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#Information"><i class="fas fa-user"></i> Personal Information</a>
        <a href="#suppliers"><i class="fas fa-database"></i> Suppliers' Database</a>
        <a href="#Notifcation"><i class="fas fa-bell"></i> Notifications</a>
        <a href="#Vaults"><i class="fas fa-history"></i> Vault and History</a>
        <a href="#Template"><i class="fas fa-star"></i> Template Hub</a>
        <a id="logout" href="#logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div id="topNav">
        <img id="logo" src="{{ asset('storage\Top Navbar PLM.png') }}" alt="Logo">
        <div id="searchBar">
            <img id="searchIcon" src="{{ asset('storage\Search.svg') }}" alt="Search">
            <input type="text" id="searchInput" placeholder="Search here" oninput="toggleSearchIcon()">
        </div>
    </div>

    <div id="content">
        <h1 id="welcomeMessage">Welcome to Your Website</h1>
        <p>Sir pwde floor wax nalang to?</p>
    </div>

    <script>
        function toggleSearchIcon() {
            var searchInput = document.getElementById('searchInput');
            var searchIcon = document.getElementById('searchIcon');

            if (searchInput.value.trim() !== '') {
                searchIcon.style.display = 'none';
            } else {
                searchIcon.style.display = 'block';
            }
        }
    </script>
</body>
</html>
