<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width,initial-scale-1.0" />
    <link rel="stylesheet" href="timetable1.css">
    <!-- Bootstrap CSS (assuming you've already included it) -->
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/ca89ba1ad6.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
    <title></title>
</head>
<body>
    <header>
        <div class="header-nav">
            <a href="#" class="logo"><span>EXPRESS</span>TIME</a>
            <nav class="navbar">
                <a href="Test3.php">HOME</a>HOME</a>
                <a href="#home">LATEST NEWS</a>
                <a href="#transport">BUS</a>
                <a href="#transport">TRAIN</a>
            </nav>
            <div class="icon">
                <i class="fas fa-search" id="search-btn"></i>
                <i class="fas fa-user" id="login-btn"></i>
                <i class="fa-solid fa-user-secret" id="admin-login-btn"></i>
            </div>

        </div>
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="Search here..." />
            <label for="search-bar"></label>
        </form>
    </header>
    
    <div class="login-form-container">
        <div class="card">
            <div class="card-front">
                <i class="fa-solid fa-xmark" id="form-close"></i>
                <form action="">
                    <h3>Login</h3>
                    <input type="email" class="box" placeholder="Enter your email" />
                    <input type="password" class="box" placeholder="Enter your password" />
                    <input type="submit" class="submit-btn" value="Login now" />
                    <input type="checkbox" id="remember" /><span>Remember Me</span>
                    <p>Forget password?  <a href="#">Click here</a></p>

                </form>
                <p>I'm New Here.  <a href="#" onclick="openRegister()">Click here</a></p>
            </div>
            <div class="card-back">
                <i class="fa-solid fa-xmark" id="form-close"></i>
                <form action="">
                    <h3>Register</h3>
                    <input type="text" class="box" placeholder="ID Name" />
                    <input type="email" class="box" placeholder="Enter your email" />
                    <input type="password" class="box" placeholder="Enter your password" />
                    <input type="submit" class="register-btn" value="Register now" />

                </form>
                <p>I've An Account.  <a href="#" onclick="openLogin()">Click here</a></p>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>MRT PUTRAJAYA FEEDER BUS</h1>
        <div class="bus-buttons">
            <button onclick="showRoutes('type3')">MRT Putrajaya Feeder Bus</button>
        </div>
    </div>

    <div class="container" id="routesContainer" style="display: none;">
        <h1>Bus Routes</h1>
        <div id="routeButtons"></div>
    </div>
   
    <div class="container" id="routesContainer" style="display: none;">
    <h1>Bus Routes</h1>
    <div id="routeButtons"></div>
</div>

<div class="container" id="scheduleContainer" style="display: none;">
    <h1>Bus Schedule</h1>
    <div id="schedule"></div>
    <script src="MRTP_BUS.js"></script>
</div>

<div class="container-nav" id="transport">
    <ul class="nav nav-pills nav-justified">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#featured">Train</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#popular">Bus</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade" id="featured">
                <ul class="transport-links">
                    <li>
                        <div class="card text-center" style="width: 18rem;">
                            <img src="MRT.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="MRT.html" class="btn btn-primary"><h4>MRT</h4></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card text-center" style="width: 18rem;">
                            <img src="LRT.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="LRT.html" class="btn btn-primary"><h4>LRT</h4></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card text-center" style="width: 18rem;">
                            <img src="KTM.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="KTM.html" class="btn btn-primary"><h4>KTM</h4></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card text-center" style="width: 18rem;">
                            <img src="Monorail.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="MONORAIL.html" class="btn btn-primary"><h4>MONORAIL</h4></a>
                            </div>
                        </div>
                    </li>
                </ul>
        </div>
        <div class="tab-pane fade show active" id="popular">
        <ul class="transport-links">
                    <li><a href="MRTK_Bus.php"><h4>MRT KAJANG FEEDER BUS</h4></a></li>
                    <li><a href="MRTP_Bus.php"><h4>MRT PUTRAJAYA FEEDER BUS</h4></a></li>
                    <li><a href="RAPIDKL_Bus.php"><h4>RAPIDKL BUS</h4></a></li>
                    <li><a href="GOKL_BUS.php"><h4>GOKL BUS</h4></a></li>
                    <li><a href="SMARTSELANGOR_Bus.php"><h4>SMART SELANGOR BUS</h4></a></li>
                </ul>
        </div>
        <div class="tab-pane fade" id="latest">
            <h4>Latest News</h4>
            <p>This is the content for the Latest News tab.</p>
        </div>
    </div>
</div>

<script src="Test3.js"></script>
</body>
</html>