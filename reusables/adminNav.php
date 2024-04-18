<head>
    <style>
         body{
            font-family: "Open Sans";
            margin: 0px;
        }
        .navbar{
            display: flex;
            justify-content: space-between;
            align-items: center; 
            margin-top: 10px;
            border-bottom: 1px solid #C8CCD0;
            padding: 20px;
             }
        .nav-bar{
            margin-left: -100px;
            display: flex;
            gap: 50px;
        }
        .login-container{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        .login-container a{
            text-decoration: none;
            color: black;
        }
        .login-container button{
            background-color: #006D9C;
            color: white;
            border: 0px;
        }
        .profile{
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: #DEB407;
        }
        /* Media queries for responsive design */
        /* @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }

            .login-container {
                margin-top: 10px;
            }

            .logo-container {
                margin-bottom: 20px;
            }
        } */
    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../adminDash.php">
      <img src="../images/HumberLogo.png" alt="HumberLogo" width="150">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../events.php">Attendee Preview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../newEvents.php">Create Event</a>
        </li>
      </ul>
      <div class="login-container d-flex align-items-center">
        <div class="profile rounded-circle bg-warning"></div>
      </div>
    </div>
  </div>
</nav>
