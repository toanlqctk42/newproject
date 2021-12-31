<?php
require_once '../models/user.php';
include_once '../helpers/session_helper.php';

class Users
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new User;
    }
    public function login()
    {
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //test data
        $data = [
            'userN-email' => trim($_POST['userN-email']),
            'Pass' => trim($_POST['Pass'])
        ];

        if (empty($data['userN-email']) || empty($data['Pass'])) {
            flash("login", "Please fill out all inputs");
            header("location: ../login.php");
            exit();
        }

        //Check for user/email
        if ($this->userModel->findUserByEmailOrUsername($data['userN-email'], $data['userN-email'], $data['Pass'])) {
            //User Found
            $userInfo = $this->userModel->login($data['userN-email'], $data['userN-email'], $data['Pass']);
            if ($userInfo) {
                //Create session

                if ($userInfo->level == 1) {
                    redirect("../pos/");
                } else {
                    $this->createUserSession($userInfo);
                }
            } else {
                flash("login", "No user found OR password is incorrect");
                redirect("../login.php");
            }
        } else {
            flash("login", "No user found OR Password is incorrect");
            redirect("../login.php");
        }
    }
    public function createUserSession($user)
    {
        $_SESSION['userName'] = $user->UserName;
        $_SESSION['email'] = $user->Email;
        $_SESSION['level'] = $user->level;
        redirect("../index.php");
    }
    public function logout()
    {
        unset($_SESSION['userName']);
        unset($_SESSION['email']);
        unset($_SESSION['level']);
        session_destroy();
    }
}
$test = new Users;
//Ensure that user is sending a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['redirect']) {
        case 'login':
            $test->login();
            break;
        default:
            redirect("../index.php");
    }
}else {
    switch($_GET['kill']) {
        case 'logout':
            $test->logout();
            redirect('../login.php');
        default:
        redirect("../index.php");
    }
}
