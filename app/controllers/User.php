<?php

class User extends Controller {
    private $userModel;
    private $testModel;
    public function __construct() {
        $this->userModel = $this->model('Users');
        $this->testModel = $this->model('Tests');
    }

    public function index() {
        $info = $this->userModel->findUserById($_SESSION['user_id']);
        $testResults = $this->testModel->getTestResultByUserId($_SESSION['user_id']);
        $data = [
            'title' => 'ຜູ້ໃຊ້',
            'user' => $info,
            'results' => $testResults ? $testResults : false
        ];
        $this->view('users/index', $data);
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'ລົງທະບຽນ',
                'firstName' => trim($_POST['firstName']),
                'lastName' => trim($_POST['lastName']),
                'email' => trim($_POST['email']),
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'firstName_err' => '',
                'lastName_err' => '',
                'email_err' => '',
                'username_err' => '',
                'password_err' => '',
                'confirmPassword_err' => '',
            ];

            if (empty($data['email'])) {
                $data['email_err'] = 'ກະລຸນາໃສ່ອີເມວ';
            } else {
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'ມີຄົນໃຊ້ອີເມວນີ້ແລ້ວ ,ກະລຸນາໃຊ້ອີເມວອື່ນ';
                }
            }

            if (empty($data['firstName'])) {
                $data['firstName_err'] = 'ກະລຸນາໃສ່ຊື່ແທ້';
            }

            if (empty($data['lastName'])) {
                $data['lastName_err'] = 'ກະລຸນາໃສ່ນາມສະກຸນ';
            }

            if (empty($data['username'])) {
                $data['username_err'] = 'ກະລຸນາໃສ່ຊື່ຜູ້ໃຊ້';
            } else {
                if ($this->userModel->findUserByUsername($data['username'])) {
                    $data['username_err'] = 'ມີຄົນໃຊ້ຊື່ນີ້ແລ້ວ ,ກະລຸນາໃຊ້ຊື່ອື່ນ';
                }
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'ກະລຸນາໃສ່ລະຫັດຜ່ານ';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'ລະຫັດຜ່ານຕ້ອງມີ6ຕົວຂຶ້ນໄປ';
            }

            if (empty($data['confirmPassword'])) {
                $data['confirmPassword_err'] = 'ກະລຸນາຢືນຢັນລະຫັດຜ່ານ';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPassword_err'] = 'ລະຫັດຜ່ານບໍ່ກົງກັນ';
                }
            }

            if (empty($data['firstName_err']) and empty($data['lastName_err']) and empty($data['email_err'] and
                    empty($data['username_err']) and empty($data['password_err'])) and empty($data['confirmPassword_err'])) {

                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                if($this->userModel->register($data)) {
                    redirect('user/login');
                } else {
                    die('Something wrong');
                }

            } else {
                $this->view('users/register', $data);
            }
        } else {
            $data = [
                'title' => 'ລົງທະບຽນ',
                'firstName' => '',
                'lastName' => '',
                'email' => '',
                'username' => '',
                'password' => '',
                'confirmPassword' => '',
                'firstName_err' => '',
                'lastName_err' => '',
                'email_err' => '',
                'username_err' => '',
                'password_err' => '',
                'confirmPassword_err' => '',
            ];
            $this->view('users/register', $data);
        }
    }

    public function login() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'ລົງຊື່ເຂົ້າໃຊ້',
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'username_err' => '',
                'password_err' => '',
            ];

            if (empty($data['username'])) {
                $data['username_err'] = 'ກະລຸນາໃສ່ຊື່ຜູ້ໃຊ້';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'ກະລຸນາໃສ່ລະຫັດຜ່ານ';
            }

            if ($this->userModel->findUserByUsername($data['username'])) {

            } else {
                $data['username_err'] = 'ບໍ່ພົບເຫັນລາຍຊື່ນີ້ ກວດສອບໃໝ່ອີກຄັ້ງ';
            }

            if (empty($data['username_err']) and empty($data['password_err'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if($loggedInUser) {
                    $this->createSession($loggedInUser);
                } else {
                    $data['password_err'] = 'ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ';
                    $this->view('users/login', $data);
                }

            } else {
                $this->view('users/login', $data);
            }
        } else {
            $data = [
                'title' => 'ລົງຊື່ເຂົ້າໃຊ້',
                'username' => '',
                'password' => '',
                'username_err' => '',
                'password_err' => '',
            ];

            $this->view('users/login', $data);
        }
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'ແກ້ໄຂຂໍ້ມູນຜູ້ໃຊ້',
                'firstName' => trim($_POST['firstName']),
                'lastName' => trim($_POST['lastName']),
                'email' => trim($_POST['email']),
                'username' => trim($_POST['username']),
                'firstName_err' => '',
                'lastName_err' => '',
                'email_err' => '',
                'username_err' => '',
            ];

            if (empty($data['email'])) {
                $data['email_err'] = 'ກະລຸນາໃສ່ອີເມວ';
            } else {
                if ($this->userModel->findUserByEmail($data['email'])) {
                    if ($this->userModel->findUserByEmail($data['email'])->user_id == $_SESSION['user_id']) {

                    } else {
                        $data['email_err'] = 'ມີຄົນໃຊ້ອີເມວນີ້ແລ້ວ ,ກະລຸນາໃຊ້ອີເມວອື່ນ';
                    }
                }
            }

            if (empty($data['firstName'])) {
                $data['firstName_err'] = 'ກະລຸນາໃສ່ຊື່ແທ້';
            }

            if (empty($data['lastName'])) {
                $data['lastName_err'] = 'ກະລຸນາໃສ່ນາມສະກຸນ';
            }

            if (empty($data['username'])) {
                $data['username_err'] = 'ກະລຸນາໃສ່ຊື່ຜູ້ໃຊ້';
            } else {
                if ($this->userModel->findUserByUsername($data['username'])) {
                    if ($this->userModel->findUserByUsername($data['username'])->user_id == $_SESSION['user_id'])
                    $data['username_err'] = 'ມີຄົນໃຊ້ຊື່ນີ້ແລ້ວ ,ກະລຸນາໃຊ້ຊື່ອື່ນ';
                }
            }

            if (empty($data['firstName_err']) and empty($data['lastName_err']) and empty($data['email_err'] and
                    empty($data['username_err']))) {

                $editedUser = $this->userModel->edit($data);

                if($editedUser) {
                    $_SESSION['user_email'] = $data['email'];
                    $_SESSION['username'] = $data['username'];
                    redirect('user');
                } else {
                    die('Something wrong');
                }

            } else {
                $this->view('users/edit', $data);
            }
        } else {
            $user = $this->userModel->findUserById($_SESSION['user_id']);

            $data = [
                'title' => 'ແກ້ໄຂຂໍ້ມູນຜູ້ໃຊ້',
                'firstName' => trim($user->user_firstName),
                'lastName' => trim($user->user_lastName),
                'email' => trim($user->user_email),
                'username' => trim($user->username),
                'firstName_err' => '',
                'lastName_err' => '',
                'email_err' => '',
                'username_err' => '',
            ];

            $this->view('users/edit', $data);

        }
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['user_email']);
        session_destroy();
        redirect('user/login');
    }

    public function delete() {
        if($this->loggedIn()) {
            $deleteResult = $this->testModel->deleteTestResultByUserId($_SESSION['user_id']);
            $deletedUser = $this->userModel->deleteUserById($_SESSION['user_id']);
            if ($deletedUser and $deleteResult) {
                $this->logout();
            } else {
                die('Something wrong');
            }
        }
    }

    public function loggedIn() {
        return isset($_SESSION['user_id']) ? true : false ;
    }

    public function createSession($user) {
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['username'] = $user->username;
        $_SESSION['user_email'] = $user->user_email;
        redirect('test');
    }
}
