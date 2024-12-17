<?
$connect = new mysqli("localhost", "root", "", "SitePhp");
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $firstname = $_REQUEST['firstname'] ?? '';
    $surename = $_REQUEST['surename'] ?? '';
    $login = $_REQUEST['login'] ?? '';
    $password = $_REQUEST['password'] ?? '';
    $repeatPassword = $_REQUEST['repeatPassword'] ?? '';
    $email = $_REQUEST['email'] ?? '';

    $errors = Validation($firstname, $surename, $login, $password, $repeatPassword, $email);
// Если нет ошибок, пользователь авторизован
    if (empty($errors)) {
        $message = 'Вы успешно авторизовались.';
    //отправка данных в БД
        mysqli_query($connect, "INSERT INTO `Users` (`id`,`firstname`, `surename`, `login`, `password`, `email`) VALUES (NULL, '$firstname', '$surename', '$login', '$password', '$repeatPassword', '$email');");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/indexHeader.css">
    <script src="./js/indexContentJS.js"></script>
</head>

<body>
    <header>
        <div class="header">
            <div class="logo"><a href="index.html"><img src="img/whitelog.png" class="logoimg"></a></div>
            <div class="block"><a href="tovary/mangaprice/mangaprice.html">Манга</a></div>
            <div class="block"><a href="tovary/comicsaprice/comicsaprice.html">Комиксы</a></div>
            <div class="block"><a href="tovary/merchprice/merchprice.html">Фигурки</a></div>
            <div class="block"><a href="o_nas/o_nas.html">О нас</a></div>

            <div class="blockForm">
                <form>
                    <input type="text" placeholder="Искать здесь...">
                    <button type="submit"></button>
                </form>
            </div>

            <div id="myModal" class="modal">
                <div class="modalContent">
                    <form action="" method="get" class="modalForm">
                        <span class="closeModal">&times</span>
                        <h2 class="zaregVhod">Зарегистрироваться</h2><br>
                        <div class="Inputs">
                            <label for="firstname">Имя:</label><input type="name" class="inputModal" id="firstname" name="firstname">
                        </div>
                        <?php if (isset($errors['firstname'])) : ?>
                            <p class="error"><?php echo $errors['firstname']; ?></p>
                        <?php endif; ?>
                        <div class="Inputs"> 
                            <label for="surename">Фамилия:</label><input type="name" class="inputModal" id="surename" name="surename">
                        </div>
                        <?php if (isset($errors['surename'])) : ?>
                            <p class="error"><?php echo $errors['surename']; ?></p>
                        <?php endif; ?>
                        <div class="Inputs">
                            <label for="login">Логин:</label><input type="name" class="inputModal" id="login" name="login">
                        </div>
                        <?php if (isset($errors['login'])) : ?>
                            <p class="error"><?php echo $errors['login']; ?></p>
                            <?php endif; ?>
                        <div class="Inputs">
                            <label for="password">Пароль:</label><input type="password" class="inputModal" id="password" name="password">
                        </div>
                        <?php if (isset($errors['password'])) : ?>
                            <p class="error"><?php echo $errors['password']; ?></p>
                        <?php endif; ?>
                        <div class="Inputs">
                            <label for="repeatPassword">Повторить<br> пароль:</label><input type="password" class="inputModal" id="repeatPassword" name="repeatPassword">
                        </div>
                        <?php if (isset($errors['repeatPassword'])) : ?>
                            <p class="error"><?php echo $errors['repeatPassword']; ?></p>
                        <?php endif; ?>
                        <div class="Inputs">
                            <label for="email">E-mail:</label><input type="email" class="inputModal" id="email" name="email">
                        </div>
                        <?php if (isset($errors['email'])) : ?>
                            <p class="error"><?php echo $errors['email']; ?></p>
                        <?php endif; ?>
                        <button class="initialisation">Зарегистрироваться</button>
                    </form>  
                </div>
            </div>

            <div id="myModal2" class="modal">
                <div class="modalContent">
                    <form action="" method="get" class="modalForm">
                        <span class="closeModal2">&times</span>
                        <h2 class="zaregVhod">Войти</h2>
                        <div class="Inputs">
                            <label for="loginVhod">Логин или<br> E-mail:</label><input type="name" class="inputModal" id="loginVhod" name="loginVhod">
                        </div>
                        <div class="Inputs">
                            <label for="passwordVhod">Пароль:</label><input type="password" class="inputModal" id="passwordVhod" name="passwordVhod">
                        </div>
                        <button class="initialisation">Войти</button>
                    </form>
                </div>
            </div>

            <div class="blockMod1"><button id="myBtn">Регистрация</button></div>
            <div class="blockMod2"><button id="myBtn2">Войти</button></div>
        </div>
    </header>
    <script src="js/ModalWindow.js"></script>
</body>
</html>


<?php
$usersLogin = mysqli_query("$connect, SELECT login, price FROM Users");
$usersMail = mysqli_query("$connect, SELECT email, price FROM Users");
$loginBase = mysqli_fetch_all($usersLogin, MYSQLI_NUM);
$emailBase = mysqli_fetch_all($emailBase, MYSQLI_NUM);
function Validation(string $firstname,string $surname,mixed $phone,mixed $login,mixed $password,mixed $confirmPassword){
    // Валидация полей
    if (empty($firstname)) {
        $errors['firstname'] = 'Пожалуйста, введите ваше имя.';
    }else{
        $errors = [];
    } 

    if (empty($surename)) {
        $errors['surname'] = 'Пожалуйста, введите вашу фамилию.';
    }

    if (empty($login)) {
        $errors['login'] = 'Пожалуйста, введите ваш логин.';
    }elseif(empty($login) || !preg_match("/^[a-zA-Z0-9]+$/", $login)){
        $errors['login'] = "Вы ввели не корректный логин";
    }elseif(!empty('login')){
        for($i=0; $i <= count($loginBase); $i++){
            if($login===$loginBase[$i]){
                $errors['login'] = "Данный логин уже существует.";
            }
        }
    }

    if (empty($email)) {
        $errors['email'] = 'Пожалуйста, введите почту.';
    }elseif(!empty('email')){
        for($j=0; $j <= count($emailBase); $j++){
            if($email===$emailBase[$j]){
                $errors['email'] = "Уже есть аккаунт с данным E-mail.";
            }
        }
    }

    if (empty($password)) {
        $errors['password'] = 'Пожалуйста, введите ваш пароль.';
    }

    if (empty($repeatPassword)) {
        $errors['confirm_password'] = 'Пожалуйста, повторно введите пароль.';
    } elseif ($password !== $repeatPassword) {
        $errors['confirm_password'] = 'Пароли не совпадают.';
    }

    return $errors;
}

// function zapis(string $name,string $surname,mixed $phone,mixed $login,mixed $password){
//     $arrText['firstname'] = $firstname;
//     $arrText['surname'] = $surname;
//     $arrText['phone'] = $phone;
//     $arrText['login'] = $login;
//     $arrText['password'] = $password;

//     return $arrText;
// }
?>