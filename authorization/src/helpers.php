<?php

require_once __DIR__ . '/config_reg.php';

session_start();

function redirect(string $path)
{
    header("Location: $path");
    die();
}

function setValidationError(string $fieldName, string $message)
{
    $_SESSION['validation'][$fieldName] = $message;
}

function hasValidationError(string $fieldName)
{
    return isset($_SESSION['validation'][$fieldName]);
}

function validationErrorAttr(string $fieldName)
{
    return isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"' : '';
}

function validationErrorMessage(string $fieldName)
{
    $message = isset($_SESSION['validation'][$fieldName]) ? $_SESSION['validation'][$fieldName] : '';
    unset($_SESSION['validation'][$fieldName]);
    return $message;
}

function setOldValue(string $key, mixed $value)
{
    $_SESSION['old'][$key] = $value;
}

function old(string $key)
{
    $value = isset($_SESSION['old'][$key]) ? $_SESSION['old'][$key] : '';
    unset($_SESSION['old'][$key]);
    return $value;
}

function uploadfile(array $file, string $prefix = null)
{
    $prefix = $prefix !== null ? $prefix : ''; 

    $uploadpath = dir . '/../uploads';

    if (!is_dir($uploadpath)) {
        mkdir($uploadpath, 0777, true);
    }

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $filename = $prefix . '_' . time() . ".$ext";

    if (!move_uploaded_file($file['tmp_name'], "$uploadpath/$filename")) {
        die('ошибка при загрузке файла на сервер');
    }

    return "uploads/$filename";
}

function setMessage(string $key, string $message)
{
    $_SESSION['message'][$key] = $message;
}

function hasMessage(string $key)
{
    return isset($_SESSION['message'][$key]);
}

function getMessage(string $key)
{
    $message = isset($_SESSION['message'][$key]) ? $_SESSION['message'][$key] : '';
    unset($_SESSION['message'][$key]);
    return $message;
}

function getPDO()
{
    try {
        return new \PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    } catch (\PDOException $e) {
        die("Connection error: {$e->getMessage()}");
    }
}

function findUser(string $email)
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}


function currentUser()
{
    $pdo = getPDO();

    if (!isset($_SESSION['user'])) {
        return false;
    }
    
    $userId = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : null;
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $userId]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function logout()
{
    unset($_SESSION['user']['id']);
    redirect('/../home_page.php');
}

function checkAuth()
{
    if (!isset($_SESSION['user']['id'])) {
        redirect('/../home_page.php');
    }
}

function checkGuest()
{
    if (isset($_SESSION['user']['id'])) {
        redirect('/profile/profile.php');
    }
}
?>

<style>
    input[aria-invalid="true"] {
    border: 3px;
    border-style:solid; 
    border-color: red;
    background-image: url("/authorization/images/warning.png"); 
    background-position: right 20px center;
    background-repeat: no-repeat;
    }
</style>