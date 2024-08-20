<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        
        require_once '../dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
            
           
        // Run error handlers
        $errors = [];
            
        if (is_input_empty($email, $password)) {
            $errors["empty_input"] = "Fill in all fields!";
        }

        $result = get_user($pdo, $email);
        
        if (is_email_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect Login Information";
        }
        if (!is_email_wrong($result) && is_password_wrong($password, $result ['password'])) {
            $errors["login_incorrect"] = "Incorrect Login";
        }


            
        require_once '../config_session.inc.php';
            
        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            header("Location: ../../login.php");
            die();
        }
        //appending the user id with the session id and starting a new session
        $newSerssionId = session_create_id();
        $sessionId = $newSerssionId . '_' . $result["id"];
        session_id($sessionId);

        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_firstName'] = htmlspecialchars($result['firstName']);
        $_SESSION['last_regeneration'] = time(); 

        header("Location: ../../index.php?login=success");
        $pdo=null;
        $stmt = null;

        die();
         
    } catch(PDOException $e) {
        die("Connection Error: " . $e->getMessage());
    }
} else{
    header("Location: ../index.php");
    die();
}