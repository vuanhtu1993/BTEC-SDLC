<?php

class AuthenController
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function showFormLogin()
    {
        $view = 'authen/form-login';
        $title = 'Đăng nhập';

        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function login()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                throw new Exception('Yêu cầu phương thức phải là POST');
            }

            $email      = $_POST['email'] ?? null;
            $password   = $_POST['password'] ?? null;

            if (empty($email) || empty($password)) {
                throw new Exception('Email và Password không được để trống!');
            }

            $user = $this->user->find(
                '*',
                'email = :email AND password = :password',
                [
                    'email'     => $email,
                    'password'  => $password
                ]
            );

            if (empty($user)) {
                throw new Exception('Thông tin tài khoản không đúng!');
            }

            $_SESSION['user'] = $user;

            header('Location: ' . BASE_URL_ADMIN);
            exit();
        } catch (\Throwable $th) {
            $_SESSION['success'] = false;
            $_SESSION['msg'] = $th->getMessage();

            header('Location: ' . BASE_URL_ADMIN . '&action=show-form-login');
            exit();
        }
    }

    public function logout()
    {
        session_destroy();  // hủy session trên máy chủ bao gồm cả session ID.

        header('Location: ' . BASE_URL);
        exit();
    }
}
