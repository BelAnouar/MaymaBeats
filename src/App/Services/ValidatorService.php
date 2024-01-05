<?php

declare(strict_types=1);


namespace App\Services;

session_start();

use Exception;
use Framework\Database;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;




class ValidatorService
{

    private PHPMailer $mail;
    public function __construct(private Database $db)
    {
        $this->mail = new PHPMailer(true);
    }

    public function clientRegister(array $formData)
    {
        $nom = $formData["nom"];
        $prenom = $formData["prenom"];
        $email = $formData["email"];
        $mot_de_passe = $formData["pass"];
        $hashedPassword = password_hash($mot_de_passe, PASSWORD_DEFAULT);
        $this->db->query("INSERT INTO `client` (`nom`, `prenom`, `email`, `password`, `image`) VALUES (:nom, :prenom, :email, :password, :image)", [
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':password' => $hashedPassword,
            ':image' => "/MaymaBeats/public/assets/images/user.png"
        ]);
    }

    public function artistRegister(array $formData)
    {
        $nom = $formData["nom"];
        $prenom = $formData["prenom"];
        $email = $formData["email"];
        $mot_de_passe = $formData["pass"];
        $hashedPassword = password_hash($mot_de_passe, PASSWORD_DEFAULT);
        $this->db->query("INSERT INTO `artists` (`nom`, `prenom`, `email`, `image`, `password`) VALUES (:nom, :prenom, :email, :image, :password)", [
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':password' => $hashedPassword,
            ':image' => "/MaymaBeats/public/assets/images/user.png"
        ]);
    }

    public function login(array $formData)
    {
        $email = $formData["email"];
        $password = $formData["pass"];
        $query = "";
        $role = "";
        if ($formData["Role"] === "artist") {
            $query = "SELECT * FROM artists WHERE email = :email";
            $role = "idAr";
        } else if ($formData["Role"] === "client") {
            $query = "SELECT * FROM client WHERE email = :email";
            $role = "idC";
        } else {
            $query = "SELECT * FROM admin WHERE email = :email";
            $role = "idAd";
        }

        $user = $this->db->query($query, [
            'email' => $email
        ])->find();

        if (!$user || !password_verify($password, $user['password'] ?? '')) {
            throw new \Exception("Invalid email or password");
        }

        session_regenerate_id();
        $_SESSION['user'] = $user[$role];
    }



    public function OTP(array $formData)
    {
        $email = $formData["email"];

        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;

        $this->mail->Host = "smtp.gmail.com";
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port = 587;

        $this->mail->Username = "anwarbelhassan@gmail.com";
        $this->mail->Password = "zijodwpemeghgxso";

        $this->mail->setFrom($email, $email);
        $this->mail->addAddress($email, $email);

        $this->mail->Subject = "Reset passwrod";
        $randomNumber = rand(0, 9999);
        $formattedNumber = sprintf('%04d', $randomNumber);


        $this->mail->Body = $formattedNumber;
        try {
            $_SESSION["otp"] = $formattedNumber;
            $this->mail->send();
        } catch (Exception $e) {
            echo "Mailer Error: " . $this->mail->ErrorInfo;
        }
    }


    public function getUserByEmail($email, $role)
    {

        if ($role === 'client') {
            $sql = "SELECT * FROM `client` WHERE email = :userId";
        } else {

            $sql = "SELECT * FROM `artists` WHERE email = :userId";
        }
        $params = [':userId' => $email];

        try {
            return $this->db->query($sql, $params)->find();
        } catch (\Exception $e) {
            throw new \Exception("Error fetching user by ID: " . $e->getMessage());
        }
    }
    public function getchengePass($iduser, $pass, $role)
    {
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        if ($role === 'client') {
            $sql = "UPDATE `client` SET  password = :pass WHERE idC = :userId ";
        } else {

            $sql = "UPDATE `artists` SET  password = :pass WHERE idAr  = :userId";
        }
        $params = [':pass' => $hashedPassword, ':userId' => $iduser];

        try {
            return $this->db->query($sql, $params)->find();
        } catch (\Exception $e) {
            throw new \Exception("Error fetching user by ID: " . $e->getMessage());
        }
    }
}
