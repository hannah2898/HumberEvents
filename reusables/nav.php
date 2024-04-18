<head>
    <style>
         body{
            font-family: "Open Sans",serif;
            margin: 0px;
        }
        .navbar{
            display: flex;
            justify-content: space-between;
            align-items: center; 
            padding: 15px; 
            padding-left: 50px; 
            padding-right: 50px; 
            background-color: #E6EAEE;
            margin-top: 10px;
             }
        .nav-bar{
            margin-left: -100px;
            display: flex;
            gap: 50px;
        }
        .nav-bar a{
            text-decoration: none;
            color: black;
        }
        .login-button button{
            padding: 5px;
            padding-left: 10px;
            padding-right:10px;
            color: white;
            background-color: black;
            border-radius: 6px;
            border: 0px;
        }
    </style>
</head>

<nav class="navbar">
        <div class="logo-container">
            <a href="#"><img src="../images/HumberLogo.png" alt="HumberLogo" width="150px"></a>
        </div>
        <div class="nav-bar">
            <a href="#" class="nav-item">Home</a>
            <a href="../events.php" class="nav-item active">Events</a>
            <a href="#" class="nav-item">About</a>
            <a href="#" class="nav-item">Contact</a>
        </div>
        <div class="login-container">
            <div class="login-button">
                <button>Login</button>
            </div>
        </div>
</nav>