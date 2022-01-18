<?php
$title="Тайланд"; // название формы
require __DIR__ . '/../header.php'; // подключаем шапку проекта
require "../db.php"; // подключаем файл для соединения с БД
$data = $_GET;
$id = $_SESSION['logged_user']->id;

//Берем данные из бд для страны

$countryname = R::load('country', '3');
$country = $countryname->name;

//Берем данные из бд для городов

$cityname1 = R::load('city', '7');
$city1 = $cityname1->name;

$cityname2 = R::load('city', '8');
$city2 = $cityname2->name;

$cityname3 = R::load('city', '10');
$city3 = $cityname3->name;

//Берем данные из бд для отеля

$hotelname1 = R::load('hotel', '1');
$hotel1 = $hotelname1->name;

$hotelname2 = R::load('hotel', '2');
$hotel2 = $hotelname2->name;

$hotelname3 = R::load('hotel', '3');
$hotel3 = $hotelname3->name;

//Берем данные из бд для экскурсий

$exname1 = R::load('ex', '4');
$ex1 = $exname1->name;

$exname2 = R::load('ex', '8');
$ex2 = $exname2->name;

$exname3 = R::load('ex', '9');
$ex3 = $exname3->name;

$exname4 = R::load('ex', '10');
$ex4 = $exname4->name;

?>

<h1 class="heading">Тайланд</h1>

<section>    
    <div>
         <a class="link" href="../lk.php">Личный кабинет пользователя</a> 
    </div>     
</section><br>

<h2>Тайланд - 31000 руб.</h2><br>

<h3>Выбор города и его стоимость:</h3>
Бангкок - 500 руб.<br>
Нонтхабури - 350 руб.<br>
Удонтхани - 250 руб.<br>

<br><h3>Выбор отеля и его стоимость:</h3>
Обычного класса - 2500 руб.<br>
Среднего класса - 3500 руб.<br>
Высокого класса - 4000 руб.<br>

<br><h3>Выбор кол-во экскурсий и его стоимость:</h3>
Нет - 0 руб.<br>
Первое свидание с Пхукетом - 9125 руб.<br>
В гостях у Пхраканонгского привидения - Ринкон - 7300 руб.<br>
Всё великолепие Пхукета за 1 день! - 11000 руб.<br>

<br><h3>Выбор кол-во дней и его стоимость:</h3>
Выбор кол-во дней и его стоимость зависит от Выборки отеля,<br>
т. е. Сумма выброного отеля умноженного на кол-во дней<br>



<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="style_const.css">
<section class="sav">
    <div class="container">
        <div class="row">
            <div class="col">


<!-- ВЫБОРКА -->

<FORM action='daminikana1.php' method='GET' >
<h3> Выберите город: </h3>
<SELECT name='ListBox' id='ListBox' >
<OPTION selected><?php echo $city1?></OPTION>
<OPTION><?php echo $city2?></OPTION>
<OPTION><?php echo $city3?></OPTION>
</SELECT><br><br>


<h3> Выберите отель: </h3>
<SELECT name='ListBox1' id='ListBox1'>
<OPTION selected><?php echo $hotel1?></OPTION>
<OPTION ><?php echo $hotel2?></OPTION>
<OPTION ><?php echo $hotel3?></OPTION>
</SELECT><br><br>


<h3> Выберите кол-во экскурсий: </h3>
<SELECT name='ListBox2' id='ListBox2'>
<OPTION selected><?php echo $ex1?></OPTION>
<OPTION><?php echo $ex2?></OPTION>
<OPTION><?php echo $ex3?></OPTION>
<OPTION><?php echo $ex4?></OPTION>
</SELECT><br><br>

<?php
$Day5egypt="5";
$Day7egypt="7";
$Day14egypt="14";
$Day21egypt="21";
$Day30egypt="30";
?>
<h3> Выберите кол-во дней: </h3>
<SELECT name='ListBox3' id='ListBox3'>
<OPTION selected><?php echo $Day5egypt?></OPTION>
<OPTION><?php echo $Day7egypt?></OPTION>
<OPTION><?php echo $Day14egypt?></OPTION>
<OPTION><?php echo $Day21egypt?></OPTION>
<OPTION><?php echo $Day30egypt?></OPTION>
</SELECT><br><br>
<?php
$a = $countryname->price;
$b = 0;
$c = 0;
$d = 0;
$i = 0;
$a1 = 'Нет';
$b1 = 'Нет';
$c1 = 'Нет';
$d1 = 'Нет';
$i1 = 'Нет';


if(($_GET['ListBox']) == "Бангкок")
    {
        $b = $cityname1->price;
		$b1 = 'Бангкок';
		
    }
    if(($_GET['ListBox']) == "Нонтхабури")
    {
        $b = $cityname2->price;
		$b1 = 'Нонтхабури';		
    }
    if(($_GET['ListBox']) == "Удонтхани")
    {
        $b = $cityname3->price;
		$b1 = 'Удонтхани';		
    }
    if(($_GET['ListBox1']) == "Обычного класса")
    {
        $c = $hotelname1->price; 
		$c1 = 'Обычного класса';
    }
    if(($_GET['ListBox1']) == "Среднего класса")
    {
        $c = $hotelname2->price; 
		$c1 = 'Среднего класса';
    }
    if(($_GET['ListBox1']) == "Высокого класса")
    {
        $c = $hotelname3->price; 
		$c1 = 'Высокого класса';
    }
    if(($_GET['ListBox2']) == "Нет")
    {
        $d = $exname1->price;
		$d1 = 'Нет';		
    }
    if(($_GET['ListBox2']) == "Первое свидание с Пхукетом")
    {
        $d = $exname2->price;
		$d1 = 'Первое свидание с Пхукетом';
    }
    if(($_GET['ListBox2']) == "В гостях у Пхраканонгского привидения - Ринкон")
    {
        $d = $exname3->price;
		$d1 = 'В гостях у Пхраканонгского привидения - Ринкон';		
    }
    if(($_GET['ListBox2']) == "Всё великолепие Пхукета за 1 день!")
    {
        $d = $exname4->price;
		$d1 = 'Всё великолепие Пхукета за 1 день!';
    }
    if(($_GET['ListBox3']) == "5")
    {
        $i = 5;
		$i1 = '5';		
    }
    if(($_GET['ListBox3']) == "7")
    {
        $i = 7; 
		$i1 = '7';	
    }
    if(($_GET['ListBox3']) == "14")
    {
        $i = 14;
		$i1 = '14';			
    }
    if(($_GET['ListBox3']) == "21")
    {
        $i = 21;
		$i1 = '21';			
    }
    if(($_GET['ListBox3']) == "30")
    {
        $i = 30;
		$i1 = '30';			
    }
$rezylt = (int)$a + (int)$b + (int)$d + (int)$c * (int)$i;

?>
<script>

function confirmSpelll() {
    if (confirm("После нажатия на кнопку ОК, у вас автоматические спишется сумма с баланса и данные о туре появятся в вашем личном кабинете")) {
        return true;
    } else {
        return false;
    }
}
</script>
<button type="submit" name="do_bay" id="do_bay" onclick="return confirmSpelll();">Купить</button></p>
</FORM>
<?php

if(isset($data['do_bay']))
{
		$books = R::load('users', $id);
        (int)$nowbalance = $books->balance;
	    if($nowbalance < $rezylt){
        echo '<div style="color: red; ">Недостаточно средств</div><hr>';
        echo '<form action="..\lk.php"><button>Назад</button></p>';
        return;
    }


    
    $raschet = $nowbalance - $rezylt;
    $user = R::load('users', $id);
    $user->balance = $raschet;
    $user->turs = $title;
    $user->city = $b1;
    $user->hotel = $c1;
    $user->ex = $d1;
    $user->day = $i1;
    R::store($user);

}
?>
      
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
