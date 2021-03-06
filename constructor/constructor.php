<?php
$title="Конструктор"; // название формы
require __DIR__ . '/../header.php'; // подключаем шапку проекта
require "../db.php"; // подключаем файл для соединения с БД

?>
<link rel="stylesheet" href="style_const.css">
<section class="sav">
    <div class="container">
        <div class="row">
            <div class="col">


                <h1 class="heading">Конструктор</h1>





                <?php if(isset($_SESSION['logged_user'])) : ?>

                <!-- Пользователь может нажать выйти для выхода из системы -->

                <a class="link" href="egypt1.php?ListBox=%D0%9A%D0%B0%D0%B8%D1%80&ListBox1=%D0%9E%D0%B1%D1%8B%D1%87%D0%BD%D0%BE%D0%B3%D0%BE+%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0&ListBox2=%D0%9D%D0%B5%D1%82&ListBox3=5&do_bay=p"><img class="pic" src="Egypt.jpg">
                    <h3 class="heading">Египет</h3>
                    <p class="paragraph_indent">Для многих российских туристов путешествие в Египет когда-то было первой зарубежной поездкой. В этой стране можно круглый год загорать и плавать в чистейшей воде Красного моря, любуясь на коралловые рифы и маленьких пестрых рыбок. Туры в Египет – это безошибочный вариант отпуска на любой вкус и бюджет. Солнце, море, увлекательные экскурсии и веселые дискотеки делают отдых в Египте ярким и насыщенным </p>
                </a><br>
                <a class="link" href="turcia1.php?ListBox=%D0%90%D0%BD%D0%BA%D0%B0%D1%80%D0%B0&ListBox1=%D0%9E%D0%B1%D1%8B%D1%87%D0%BD%D0%BE%D0%B3%D0%BE+%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0&ListBox2=%D0%9D%D0%B5%D1%82&ListBox3=5&do_bay="><img class="pic" src="Turkey.jpg">
                    <h3 class="heading">Турция</h3>
                    <p class="paragraph">
                        Турция уже более 20 лет является эталоном пляжного отдыха за рубежом для россиян. Когда-то большинство российских туристов начинали свой опыт путешествий именно в Турции, и до сих пор у многих осталась привычка сравнивать условия и сервис других направлений именно с этой гостеприимной страной. В Турции есть отели на любой вкус, в большинстве работает русскоговорящий персонал. Кроме того, не стоит забывать об увлекательных экскурсиях, которые познакомят с богатой историей и уникальным историческим наследием страны.</p>
                </a><br>
                <a class="link" href="daminikana1.php?ListBox=%D0%A1%D0%B0%D0%BD%D1%82%D0%BE-%D0%94%D0%BE%D0%BC%D0%B8%D0%BD%D0%B3%D0%BE&ListBox1=%D0%9E%D0%B1%D1%8B%D1%87%D0%BD%D0%BE%D0%B3%D0%BE+%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0&ListBox2=%D0%9D%D0%B5%D1%82&ListBox3=5&do_bay="><img class="pic" src="dominikana.jpg">
                    <h3 class="heading">Доминикана</h3>
                    <p class="paragraph">
                        Доминиканская Республика сегодня по праву считается лучшей страной Карибского бассейна – не только по количеству достопримечательностей и архитектурных памятников, но и по уровню обслуживания туристов. Занимающая восточную часть острова Гаити и ряд прибрежных островов, Доминикана со своими пляжами в стиле «баунти» является одним из крупнейших мировых туристических центров. Это излюбленное место для обеспеченных любителей экзотики с акцентом на беззаботный отдых в окружении фантастически красивой природы.</p>
                </a><br>
                <a class="link" href="daminikana1.php?ListBox=%D0%91%D0%B0%D0%BD%D0%B3%D0%BA%D0%BE%D0%BA&ListBox1=%D0%9E%D0%B1%D1%8B%D1%87%D0%BD%D0%BE%D0%B3%D0%BE+%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0&ListBox2=%D0%9D%D0%B5%D1%82&ListBox3=5&do_bay="><img class="pic" src="Tailand.jpeg">
                    <h3 class="heading">Тайланд</h3>
                    <p class="paragraph">
                        Страна тысячи улыбок» и самое популярное направление Юго-Восточной Азии, где можно найти, пожалуй, все варианты отдыха. Хотите классический отпуск на современном курорте? Пожалуйста. Мечтаете о бурной ночной жизни и экстремальных приключениях? Легко. Грезите уединенными пляжами вдали от цивилизации? В Таиланде их хватит на всех. Главное, правильно подобрать курорт, доверившись профессионалам. Отсутствие визовых формальностей существенно упрощает выбор тура. Отельная база Таиланда на редкость разнообразна — от роскошных комплексов до эко-бунгало, поэтому отпускной бюджет может варьироваться. Но, в любом случае, основная часть отдыха будет проходить за пределами отеля — экскурсионные возможности и обилие интересных заведений удивляют даже бывалых путешественников. Отдельного внимания заслуживают свадебные церемонии, проводимые в Таиланде. Церемонию можно провести как в европейском стиле, так и с соблюдением буддийских традиций. Так или иначе, на память молодой семье останутся невероятно красивые фотографии.
                    </p>
                </a><br>
                <a class="link" href="../lk.php">Личный кабинет пользователя</a>

                <?php else : ?>


                <!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
                <a class="link" href="../login.php">Авторизоваться</a><br>
                <a class="link" href="../signup.php">Регистрация</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . '/../footer.php'; ?>
<!-- Подключаем подвал проекта -->
