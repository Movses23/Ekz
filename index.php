<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<section class="sav">
    <div class="container">


        <header class="main-header">
            <h1 class="heading">Воплощяем ваши мечты в реальность!</h1>





            <!-- Если авторизован выведет приветствие -->
            <?php if(isset($_SESSION['logged_user'])) : ?>
            Привет, <?php echo $_SESSION['logged_user']->fio; ?><br>
            <div class="button_cont">
                <a class="button3" href="lk.php">Личный кабинет</a>

                <!-- Пользователь может нажать выйти для выхода из системы -->
                <a class="button4" href="logout.php">Выйти</a>
            </div> <!-- файл logout.php создадим ниже -->
            <?php else : ?>

            <!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
            <div class=logo><img class="logotipe" src="logo.png"><br>
                <p class="paragraph1">Туристическая фирма</p>
            </div>
            <div class="navigation">
                <ul>
                    <li class="navigation__item"><a href="readyturs.php">Туры</a></li>
                    <li class="navigation__item"><a href="http://site-main/constructor/constructor.php">Конструктор туров</a></li>
                    <li class="navigation__item"><a href="#">Телефон: +7(495)800-08-08</a></li>
                </ul>
            </div>
            <div class="button">
                <a class="button1" href="login.php">Авторизоваться</a>
                <a class="button2" href="signup.php">Регистрация</a>
            </div>
        </header>


        <div class="clearfix"></div>
    </div>
</section>
<section class="sav">
    <div class="container">
        <div class="row">

            <div class="container-small">
                <div class="row1">
                    <div class="column1">
                        <h3 class="heading1">О нас</h3>
                        <p class="paragraph2">
                            Наше турагентство предлагает услуги по подбору и организации туров, экскурсий и культурно-развлекательных мероприятий. Зная рынок в нюансах, мы создаем путешествия мечты. Вне зависимости от предпочтений, условий и бюджета клиента.

                            Подходим сугубо индивидуально, заботимся о вашем комфорте, помогаем экономить деньги на ненужных услугах и ничего не значащих «звездах». Ключевой показатель эффективности нашей работы – тысячи довольных клиентов, которые обращаются к нам снова и снова. Позвоните или оставьте заявку через сайт – мы будем рады организовать для вас поездку, которая оставит только положительные эмоции и не ударит по бюджету.
                        </p>

                        <h3 class="heading1">Наши туры</h3>
                        <a class="link3" href="egypt.php"><img class="photo" src="Egypt.jpg">
                            <h3 class="heading">Египет</h3>
                            <p class="paragraph_indent">Для многих российских туристов путешествие в Египет когда-то было первой зарубежной поездкой.
                                <br><span class="price">Цена: 33000₽</span>
                            </p>
                        </a>
                        <a class="link3" href="turcia.php"> <img class="photo" src="Turkey.jpg">
                            <h3 class="heading">Турция</h3>
                            <p class="paragraph_indent">Турция уже более 20 лет является эталоном пляжного отдыха за рубежом для россиян. Когда-то большинство российских туристов начинали свой опыт путешествий именно в Турции.
                                <br><span class="price">Цена: 42800₽</span>
                            </p>
                        </a>
                        <a class="link3" href="daminikana.php"> <img class="photo" src="dominikana.jpg">
                            <h3 class="heading">Доминикана</h3>
                            <p class="paragraph_indent">Доминиканская Республика сегодня по праву считается лучшей страной Карибского бассейна – не только по количеству достопримечательностей и архитектурных памятников, но и по уровню обслуживания туристов..
                                <br><span class="price">Цена: 58100₽</span>
                            </p>
                        </a>
                        <a class="link3" href="tiland.php"> <img class="photo" src="Tailand.jpeg">
                            <h3 class="heading">Тайланд</h3>
                            <p class="paragraph_indent">Страна тысячи улыбок» и самое популярное направление Юго-Восточной Азии, где можно найти, пожалуй, все варианты отдыха. Хотите классический отпуск на современном курорте? Пожалуйста. Мечтаете о бурной ночной жизни и экстремальных приключениях? Легко.
                                <br><span class="price">Цена: 49000₽</span>
                            </p>
                        </a>
                    </div>

                </div>

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




<?php endif; ?>

<?php require __DIR__ . '/footer.php'; ?>

<!-- Подключаем подвал проекта -->
