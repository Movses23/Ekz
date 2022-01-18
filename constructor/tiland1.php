<?php
$title="Тайланд1"; // название формы
require __DIR__ . '/../header.php'; // подключаем шапку проекта
require "../db.php"; // подключаем файл для соединения с БД


?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="style_const.css">
<section class="sav">
    <div class="container">
        <div class="row">
            <div class="col">

                <h1 class="heading">Тайланд</h1>



                <!-- ВЫБОРКА ГОРОДА -->
                <?php
$Bangkok1="Бангкок";
$Nontxabyri2="Нонтхабури";
$Ydonthani3="Удонтхани";
echo "<FORM method='post' action=''>";// action='сюда надо вставить пусть к файлу, хуй знает нахуя'
echo "<h3> Выберите город: </h3>";
echo "<SELECT name='ListBox'>";
echo "<OPTION>$Bangkok1</OPTION>";
echo "<OPTION>$Nontxabyri2</OPTION>";
echo "<OPTION>$Ydonthani3</OPTION>";
echo "</SELECT><br><br>";
echo "<input type='hidden' name='Bangkok1' value='$Bangkok1'>";
echo "<input type='hidden' name='Nontxabyri2' value='$Nontxabyri2'>";
echo "<input type='hidden' name='Ydonthani3' value='$Ydonthani3'>";
echo "</FORM>";
?>

                <!-- ВЫБОРКА ОТЕЛЯ -->
                <?php
$Ob1="Обычного класса";
$Sr2="Среднего класса";
$Vis3="Высокого класса";
echo "<FORM method='post' action=''>";// action='сюда надо вставить пусть к файлу, хуй знает нахуя'
echo "<h3> Выберите отель: </h3>";
echo "<SELECT name='ListBox'>";
echo "<OPTION>$Ob1</OPTION>";
echo "<OPTION>$Sr2</OPTION>";
echo "<OPTION>$Vis3</OPTION>";
echo "</SELECT><br><br>";
echo "<input type='hidden' name='Ob1' value='$Ob1'>";
echo "<input type='hidden' name='Sr2' value='$Sr2'>";
echo "<input type='hidden' name='Vis3' value='$Vis3'>";
echo "</FORM>";
?>

                <!-- ВЫБОРКА КОЛ-ВО ЭКСКУРСИЙ -->
                <?php
$NO1="Нет";
$PervoeSvidanie2="Первое свидание с Пхукетом";
$VGostiaxY3="В гостях у Пхраканонгского привидения";
$VseVelicolepno4="Всё великолепие Пхукета за 1 день!";
echo "<FORM method='post' action=''>";// action='сюда надо вставить пусть к файлу, хуй знает нахуя'
echo "<h3> Выберите кол-во экскурсий: </h3>";
echo "<SELECT name='ListBox'>";
echo "<OPTION>$NO1</OPTION>";
echo "<OPTION>$PervoeSvidanie2</OPTION>";
echo "<OPTION>$VGostiaxY3</OPTION>";
echo "<OPTION>$VseVelicolepno4</OPTION>";
echo "</SELECT><br><br>";
echo "<input type='hidden' name='NO1' value='$NO1'>";
echo "<input type='hidden' name='PervoeSvidanie2' value='$PervoeSvidanie2'>";
echo "<input type='hidden' name='VGostiaxY3' value='$VGostiaxY3'>";
echo "<input type='hidden' name='VseVelicolepno4' value='$VseVelicolepno4'>";
echo "</FORM>";
?>

                <!-- ВЫБОРКА КОЛ-ВО ДНЕЙ -->
                <?php
$Day5egypt="5";
$Day7egypt="7";
$Day14egypt="14";
$Day21egypt="21";
$Day30egypt="30";
echo "<FORM method='post' action=''>";// action='сюда надо вставить пусть к файлу, хуй знает нахуя'
echo "<h3> Выберите кол-во дней: </h3>";
echo "<SELECT name='ListBox'>";
echo "<OPTION>$Day5egypt</OPTION>";
echo "<OPTION>$Day7egypt</OPTION>";
echo "<OPTION>$Day14egypt</OPTION>";
echo "<OPTION>$Day21egypt</OPTION>";
echo "<OPTION>$Day30egypt</OPTION>";
echo "</SELECT><br><br>";
echo "<input type='hidden' name='Day5egypt' value='$Day5egypt'>";
echo "<input type='hidden' name='Day7egypt' value='$Day7egypt'>";
echo "<input type='hidden' name='Day14egypt' value='$Day14egypt'>";
echo "<input type='hidden' name='Day21egypt' value='$Day21egypt'>";
echo "<input type='hidden' name='Day30egypt' value='$Day30egypt'>";
echo "</FORM>";
?>



                <!-- Если авторизован выведет приветствие -->


                <form action="tiland1.php" method="post">
                    <button class="button3" name="do_bay" type="button" onclick="return confirm('Вы уверены?');">Рассчитать</button>
                </form>





                <!-- Пользователь может нажать выйти для выхода из системы -->

                <a class="link4" href="../lk.php">Личный кабинет пользователя</a>


            </div>
        </div>
    </div>
</section>


<footer class="end">
    <div class="container">

        <div class="footer-menu">
            <ul>
                <li><a class="footer-menu__size" href="readyturs.php">Туры</a></li>
                <li><a class="footer-menu__size" href="http://site-main/constructor/constructor.php">Конструктор туров</a></li>
                <li><a class="footer-menu__size" href="#">Наши контакты: +7(495)800-08-08</a></li>

            </ul>
        </div>
        <div class="footer-icons">
            <a class="footer-icons__facebook" href="#"><i class="fab fa-facebook-square"></i></a>
            <a class="footer-icons__twitter" href="#"><i class="fab fa-twitter"></i></a>
            <a class="footer-icons__twitter" href="#"><i class="fab fa-instagram"></i></a>
            <a class="footer-icons__twitter" href="#"><i class="fab fa-behance"></i></a>
            <a class="footer-icons__twitter" href="#"><i class="fab fa-dribbble"></i></a>
        </div>
        <div class="clearfix"></div>
        <div class="copyright"> © 2021-2022 Туристическая фирма - Воплощайте свои мечты вместе с нами!</div>
    </div>
</footer>


<?php require __DIR__ . '/../footer.php'; ?>
<!-- Подключаем подвал проекта -->
