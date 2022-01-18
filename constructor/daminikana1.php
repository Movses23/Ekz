<?php
$title="Доминикана1"; // название формы
require __DIR__ . '/../header.php'; // подключаем шапку проекта
require "../db.php"; // подключаем файл для соединения с БД


?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="style_const.css">
<section class="sav">
    <div class="container mt-4">
        <div class="row">
            <div class="col">

                <h1 class="heading">Доминикана</h1>



                <!-- ВЫБОРКА ГОРОДА -->
                <?php
$SantoDomingo1="Санто-Доминго";
$LosAlkarrisos2="Лос-Алькаррисос";
$Igyei3="Игуэй";
echo "<FORM method='post' action=''>";// action='сюда надо вставить пусть к файлу, хуй знает нахуя'
echo "<h3>Выберите город:</h3>";
echo "<SELECT name='ListBox'>";
echo "<OPTION>$SantoDomingo1</OPTION>";
echo "<OPTION>$LosAlkarrisos2</OPTION>";
echo "<OPTION>$Igyei3</OPTION>";
echo "</SELECT><br><br>";
echo "<input type='hidden' name='SantoDomingo1' value='$SantoDomingo1'>";
echo "<input type='hidden' name='LosAlkarrisos2' value='$LosAlkarrisos2'>";
echo "<input type='hidden' name='Igyei3' value='$Igyei3'>";
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
$Ostrov2="Остров Саона Делюкс";
$Secret3="Секрет Саманы-Ринкон";
$Yzhin4="Ужин в небесах: самый необычный ресторан в Доминикане!";
echo "<FORM method='post' action=''>";// action='сюда надо вставить пусть к файлу, хуй знает нахуя'
echo "<h3> Выберите кол-во экскурсий: </h3>";
echo "<SELECT name='ListBox'>";
echo "<OPTION>$NO1</OPTION>";
echo "<OPTION>$Ostrov2</OPTION>";
echo "<OPTION>$Secret3</OPTION>";
echo "<OPTION>$Yzhin4</OPTION>";
echo "</SELECT><br><br>";
echo "<input type='hidden' name='NO1' value='$NO1'>";
echo "<input type='hidden' name='Ostrov2' value='$Ostrov2'>";
echo "<input type='hidden' name='Secret3' value='$Secret3'>";
echo "<input type='hidden' name='Yzhin4' value='$Yzhin4'>";
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


                <form action="daminikana1.php" method="post">
                    <button class="button3" name="do_bay" type="submit" onclick="return confirm('Вы уверены?');">Рассчитать</button>
                </form>





                <!-- Пользователь может нажать выйти для выхода из системы -->

                <a class="link" href="../lk.php">Личный кабинет пользователя</a>

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
