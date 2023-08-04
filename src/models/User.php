<?php

namespace app\models;

class User extends Model
{
    private string $userName;
    private string $email;
    private string $password;

    private string $confirmationPassword;

    public function __construct(array $data)
    {
        $this->id = $data["id"] ?? 0;
        $this->userName = $data["userName"] ?? "";
        $this->email = $data["email"] ?? "";
        $this->password = $data["password"] ?? "";
        $this->confirmationPassword = $data["confirmationPassword"] ?? $data["password"];
        $this->tableName = "users";
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getConfirmationPassword(): string
    {
        return $this->confirmationPassword;
    }

    /**
     * @param string $confirmationPassword
     */
    public function setConfirmationPassword(string $confirmationPassword): void
    {
        $this->confirmationPassword = $confirmationPassword;
    }

    public function validate(): void
    {

    }

    public function toArray(): array
    {
        return [
            "id" => $this->getId(),
            "userName" => $this->getUserName(),
            "email" => $this->getEmail(),
            "password" => $this->getPassword()
        ];
    }
}