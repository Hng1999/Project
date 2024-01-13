<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width,initial-scale-1.0" />
    <link rel="stylesheet" href="Test3.css">
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
                <a href="Test3.php">HOME</a>
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
                <form action="login.php" method="POST">
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
                <form action="register.php" method="POST">
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

    <div class="container" style="background-color: darkslateblue; width:auto; height:50%;">
        <div class="featured-post">
        <h1>WELCOME TO EXPRESSTIME</h1>
            <p class="lead">Navigate Klang Valley with ease: Get bus / train timetable and other public transit related information here.</p>
        </div>
        <div class="row">
            <div class="col-md-6 g-col-8">
                <div class="card">
                    <div class="card-body">
                        <h3>MY 50 Unlimited Pass</h3>
                        <p>RM50 for 30 days of Unlimited Travel on all Rapid Penang and Rapid KL rail & bus services</p>
                    </div>
                    <!-- Image placeholder -->
                    <div class="image-placeholder"></div>
                </div>
            </div>
            <div class="col-md-6 g-col-8">
                <div class="card">
                    <div class="card-body">
                        <h3>Concession Card</h3>
                        <p>Fare discount of 50% on cash rate for every journey on Rapid KL Bus, BRT, LRT, Monorail and MRT services</p>
                    </div>
                    <!-- Image placeholder -->
                    <div class="image-placeholder"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-nav row-gap-3" id="transport">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#train">Train</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-toggle="pill" href="#bus">Bus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#service">Service</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="train">
                <ul class="transport-links">
                    <li>
                        <div class="card text-center" style="width: 14rem;">
                            <img src="MRT.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="MRT.html" class="btn btn-primary"><h4>MRT</h4></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card text-center" style="width: 14rem;">
                            <img src="LRT.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="LRT.html" class="btn btn-primary"><h4>LRT</h4></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card text-center" style="width: 14rem;">
                            <img src="KTM.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="KTM.html" class="btn btn-primary"><h4>KTM</h4></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card text-center" style="width: 14rem;">
                            <img src="Monorail.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="MONORAIL.html" class="btn btn-primary"><h4>MONORAIL</h4></a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="transport-links">
                <div class="tstatus-container"><!--Train Status & Bus Status-->
            <?php
    $mysql = mysqli_connect("localhost", "root", "");
    mysqli_select_db($mysql, 'websitedb');

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // SQL query to fetch train status data
    $sql = "SELECT * FROM train_status";
    $result = mysqli_query($mysql, $sql);
?>
</div>
    <h2>Train Status</h2><br>
            <style>
        table {
            border-collapse: collapse;
            width: 75%;
            margin-left: auto;
            margin-right: auto;
            tr:hover {background-color: cyan;}
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    <table>     
        <tr>
            <th>Train ID</th>
            <th>Train Name</th>
            <th>Frequency</th>
            <th>Status</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['train_id']}</td>
                        <td>{$row['train_name']}</td>
                        <td>{$row['frequency']}</td>
                        <td>{$row['status']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No train data available</td></tr>";
        }
        ?>
    </table>
            </div>
            <div class="tab-pane fade" id="bus">
                <ul class="transport-links">
                    <li>
                        <div class="card text-center" style="width: 14rem;">
                            <img src="MRT bus.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="MRTK_Bus.php" class="btn btn-primary"><h4>MRT KAJANG FEEDER BUS</h4></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card text-center" style="width: 14rem;">
                            <img src="MRT bus.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="MRTP_Bus.php" class="btn btn-primary"><h4>MRT PUTRAJAYA FEEDER BUS</h4></a>
                        </div>
                     </div>
                    </li>
                    <li>
                        <div class="card text-center" style="width: 14rem;">
                            <img src="RapidKL bus.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="RAPIDKL_Bus.php" class="btn btn-primary"><h4>RAPIDKL BUS</h4></a>
                        </div>
                     </div>
                    </li>
                    <li>
                         <div class="card text-center" style="width: 14rem;">
                            <img src="GoKL bus.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="GOKL_BUS.php" class="btn btn-primary"><h4>GOKL BUS</h4></a>
                        </div>
                     </div>
                    </li>
                    <li>
                         <div class="card text-center" style="width: 14rem;">
                            <img src="Smart Selangor bus.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="SMARTSELANGOR_Bus.php" class="btn btn-primary"><h4>SMART SELANGOR BUS</h4></a>
                        </div>
                     </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="service">
                <h4>Service</h4>
                <p>This is the content for the Latest News tab.</p>
            </div>
        </div>
    </div>
    <!--Complain And Suggestion-->
    <div class="complain-form-container">
    <iframe id="" allowtransparency="true" allowfullscreen="true" allow="geolocation; microphone; camera" src="https://my.forms.app/form/65a21fab01a50f722f87aff9" frameborder="0" style="width: 100vw; min-width:100%; height:600px; border:none;"></iframe>
        <div formsappId="65a21fab01a50f722f87aff9"></div>
<script src="https://forms.app/static/embed.js" type="text/javascript" async defer onload="new formsapp('65a21fab01a50f722f87aff9', 'standard', {'width':'100vw','height':'600px'});"></script>
    </div>
    <script src="Test3.js"></script>
</body>
</html>