<?php
//error reports
error_reporting(E_ALL ^ E_NOTICE);
// require_once "includes/config_session.inc.php";

// $brandText = "Home";
// $brandLink = "index.php";

// if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
//     // If logged in, show different options
//     switch ($currentPage) {
//         case "index.php":
//             $brandText = "Dashboard";
//             $brandLink = "dashboard.php";
//             break;
//         case "instructors.php":
//         case "about.php":
//         case "contact.php":
//             $brandText = "Home";
//             $brandLink = "index.php";
//             break;
//         // You can add more cases if needed
//     }
// } else {
//     // If not logged in, show default options
//     switch ($currentPage) {
//         case "index.php":
//             $brandText = "Login";
//             $brandLink = "login.php";
//             break;
//         case "reg.php":
//             $brandText = "Already Registered?";
//             $brandLink = "login.php";
//             break;
//         case "login.php":
//             $brandText = "Sign Up";
//             $brandLink = "reg.php";
//             break;
//         // You can add more cases if needed
//     }
// }
$currentPage = basename($_SERVER['PHP_SELF']); // Get current file name and changes brand text depedning on current page
    $brandText = "Course Registration System";
    $brandLink = "index.php";

    switch ($currentPage) {
        case "index.php":
            $brandText = "Login";
            $brandLink = "login.php";
            break;
        case "reg.php":
            $brandText = "Already Registered?";
            $brandLink = "login.php";
            break;
        case "login.php":
            $brandText = "Sign Up";
            $brandLink = "reg.php";
            break;
        case "instructors.php":
            $brandText = "Home";
            $brandLink = "index.php";
            break;
        case "about.php":
            $brandText = "Home";
            $brandLink = "index.php";
            break;
        case "contact.php":
            $brandText = "Home";
            $brandLink = "index.php";
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Course Enrollment System</title>
</head>
<body>
    
    <h1>Course Registration Wesbite</h1>
    
    
    <nav class="navbar bg-transparent fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler bg-light order-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand bg-light mx-2" href="<?php echo $brandLink; ?>"><?php echo $brandText; ?></a>
        
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-light">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Our Instructors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Our Instructors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </nav>
    
    
   
    
     
</body>
</html>