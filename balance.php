<?php
$title="Баланс"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД

// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;
$id = $_SESSION['logged_user']->id;

if(isset($data['do_Balance'])) {
    $errors = array();

    if(trim($data['Balance']) == '') {

		$errors[] = "Введите сумму!";
	}

    if(empty($errors)) {
    $books = R::load('users', $id);
    (int)$nowbalance = $books->balance;

    $balance = (int)$data['Balance'];
    $raschet = $nowbalance + $balance;

    }
  

    if(empty($errors)) {
        $user = R::load('users', $id);
        $user->balance = $raschet;
    R::store($user);
    header('Location: lk.php');
    }
 else {
    // array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
}
}
?>

<link rel="stylesheet" href="style.css">
<section class="sav">
    <div class="container mt-4">
        <div class="row">
            <div class="col">

                <h3 class="heading">Пополнение:</h3>

                <h2 class="heading">Введите сумму пополнения</h2>

                <form action="Balance.php" method="post">
                    <input type="numbers" class="form-control" name="Balance" id="Balance" min="1" max="1000000" required> <br>
                    <button class="button3" name="do_Balance" type="submit">Пополнить</button>
                </form>

                <!-- Пользователь может нажать Личный кабинет пользователя для пехода в файл lk.php -->
                <a class="link" href="lk.php">Личный кабинет пользователя</a>
            </div>
        </div>
    </div>
</section>


<?php require __DIR__ . '/footer.php'; ?>
<!-- Подключаем подвал проекта -->
