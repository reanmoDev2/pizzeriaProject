<?php
class Logins extends Controller
{
    public function __construct()
    {
        if (isset($_SESSION['user_id'])) {
            return redirect('dashboards/index');
        }
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            try {
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'email_err' => '',
                    'password_err' => ''
                ];
            } catch (Exception $e) {
                echo ($e->getTraceAsString());
            }

            if (empty($data['email'])) {
                $data['email_err'] = 'Bitte geben Sie eine E-Mail Adresse ein';
            } else {
                if ($this->userModel->findUserByEmail($data['email'])) {
                } else {
                    $data['email_err'] = 'Benutzer nicht gefunden';
                }
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Bitte geben Sie ein Passwort ein';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'Das Passwort ist zu Kurz (min. 6 Zeichen)';
            }

            if (empty($data['email_err'])  && empty($data['password_err'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_err'] = 'Das Passwort ist falsch';
                    $this->view('logins/index', $data);
                }
            } else {
                $this->view('logins/index', $data);
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            $this->view('logins/index', $data);
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_first_name'] = $user->first_name;
        $_SESSION['user_last_name'] = $user->last_name;
        redirect('dashboards/index');
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_first_name']);
        unset($_SESSION['user_last_name']);
        session_destroy();
        redirect('logins/index');
    }
}
