<?php

namespace App\Components;

use \App\Components\UserSession;
use App\Models\User;

class Authentication
{
    public function getCurrentUser()
    {
        return UserSession::issetSession();
    }

    protected function login($login)
    {
        return UserSession::startSession($login);
    }

    public function logout()
    {
        return UserSession::unsetSession();
    }

    protected function existUser($login)
    {
        return User::findByLogin($login);
    }

    protected function checkPassword($login, $password) : bool
    {
        if (!$this->existUser($login)) {
            return false;
        }
        $hashPassword = $this->existUser($login)->passwordHash;
        return password_verify($password, $hashPassword);
    }

    public function authentication(array $data)
    {
        $login = $data['login'];
        $password = $data['password'];

        $errors = [];

        if (empty($login)) {
            $errors[] = 'Вы не ввели Логин!';
        }
        if (empty($password)) {
            $errors[] = 'Вы не ввели Пароль!';
        }
        if (!$this->existUser($login)) {
            $errors[] = 'Пользователь с таким логином не существует';
        }
        if (!$this->checkPassword($login, $password)) {
            $errors[] = 'Пароль введен неправильно';
        }
        if (!empty($errors)) {
            return $errors;
        }

        return $this->login($login);
    }
}