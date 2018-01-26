<?php
    require_once("../database/Connection.class.php");
    require_once("../controllers/MembersController.class.php");
    session_start();
    
    if(isset($_POST["registerAttempt"])) { 
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]); 
        $birthDate = $_POST["birthdate"];
        $age = $_POST["age"];
        $estadocivil = $_POST["estadocivil"];
        $telefone = $_POST["telefone"];
        $github = $_POST["github"];
        $pontuacao = $_POST["pontuacao"];
        $admin = $_POST["admin"];

        $member = new Member($email, $password, null, $name, $birthDate,$age, $estadocivil, $telefone, $github, $pontuacao,$admin);

        $membersController = new MembersController();
        $_SESSION['size'] = $membersController->getSize();
        $membersController->registerNewMember($member);
        header("location:../view/userRegister.php?register=true");
    }

    if(isset($_POST["loginAttempt"])) { 
        $email = $_POST["email"];
        $password = md5($_POST["password"]); 
        $member = new Member($email, $password);

        if($member->auth()) {
            $_SESSION["auth"] = true;
            $_SESSION["name"] = $member->getName();
            $_SESSION["admin"] = $member->isAdmin();
            $_SESSION["points"] = $member->getPontuacao();

            $control = new MembersController();
            $_SESSION['size'] = $control->getSize();
           
            header("location:../view/home.php");
        } else {
            header("location:../view/login.php?valid=false");
           
        }
    }

    if(isset($_SESSION["auth"]) && $_SESSION["auth"] == true && isset($_POST["logoutAttempt"])) { 
        unset($_SESSION["auth"]);
        unset($_SESSION["member"]);
        session_destroy();
        header("location:../index.php"); 
    }
?>