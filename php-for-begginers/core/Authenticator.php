<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $db = App::resolve(Database::class);

        $user = $db->query(
            'SELECT * FROM users WHERE email = :email',
            ['email' => $email]
        )->find();

        if (!$user || !password_verify($password, $user['password'] ?? '')) {
            return false;
        }

        $this->login($user);

        return true;
    }

    public function login($user)
    {
        session_regenerate_id(true);

        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email']
        ];
    }

    public function logout()
    {
        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();

            setcookie(session_name(), '', [
                'expires' => time() - 3600,
                'path' => $params['path'],
                'domain' => $params['domain'],
                'secure' => $params['secure'],
                'httponly' => $params['httponly']
            ]);
        }

        session_destroy();
    }
}
