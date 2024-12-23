<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/mangaHeader.css">
    <link rel="stylesheet" href="./css/mangaContent.css">
    <link rel="stylesheet" href="./css/mangalFooter.css">
    <link rel="stylesheet" href="./css/sliders.css">
</head>

<body>
    <main>
        <div class="content">
            <div class="filtr">
                <div class="dropdown">
                    <span><h3>Авторы</h3></span>
                    <ul>
                      <li><input type="checkbox" id="opt1"><label for="opt1">Автор 1</label></li>
                      <li><input type="checkbox" id="opt2"><label for="opt2">Автор 2</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Автор 3</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Автор 4</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Автор 5</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Автор 6</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Автор 7</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Автор 8</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Автор 9</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Автор 10</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Автор 11</label></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <span><h3>Жанры</h3></span>
                    <ul>
                      <li><input type="checkbox" id="opt1"><label for="opt1">Боевик</label></li>
                      <li><input type="checkbox" id="opt1"><label for="opt1">Героическое фентези</label></li>
                      <li><input type="checkbox" id="opt2"><label for="opt2">Драма</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Исекай</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Киберпанк</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Комедия</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Меха</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Научная фантастика</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Повседневность</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Постапокалипсис</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Психология</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Сверхъестественное</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Сянься</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Трагедия</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Триллер</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Фентези</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">Школа</label></li>
                      <li><input type="checkbox" id="opt3"><label for="opt3">18+</label></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <span><h3>Переплет</h3></span>
                    <ul>
                      <li><input type="checkbox" id="opt1"><label for="opt1">Твердый</label></li>
                      <li><input type="checkbox" id="opt1"><label for="opt1">Мягкий</label></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <span><h3>Вид прозведения</h3></span>
                    <ul>
                      <li><input type="checkbox" id="opt1"><label for="opt1">Манга</label></li>
                      <li><input type="checkbox" id="opt1"><label for="opt1">Манхва</label></li>
                      <li><input type="checkbox" id="opt2"><label for="opt2">Маньхуа</label></li>
                    </ul>
                </div>
                <div>
                    <span><h3>Цена</h3></span>
                    <label for="">От: </label><input type="text"placeholder="от..." name="priceFrom" class="priceFrom"><label for=""> До: </label><input type="text"placeholder="до..." name="priceTo" class="priceTo">
                    <button type="submit" class="priceButton">&#128270</button>

                </div>
            </div>
            <div class="manga1 manga" >
                <div class="slider">
                    <img src="img/banners/спираль1.jpg" alt="" class="imgSlider1 blockSlider1">
                    <img src="img/banners/спираль2.png" alt="" class="imgSlider1">
                    <img src="img/banners/спираль3.jpg" alt="" class="imgSlider1">
                    <button class="prev1 controlls1 prev">&#10094</button>
                    <button class="next1 controlls1 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Спираль</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga2 manga">
                <div class="slider">
                    <img src="img/banners/Cибатарианец1.jpg" alt="" class="imgSlider2 blockSlider2">
                    <img src="img/banners/Cибатарианец2.jpg" alt="" class="imgSlider2">
                    <img src="img/banners/Cибатарианец3.jpg" alt="" class="imgSlider2">
                    <button class="prev2 controlls2 prev">&#10094</button>
                    <button class="next2 controlls2 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                </div> -->
                    <a href="">Cибатарианец</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga3 manga">
                <div class="slider">
                    <img src="img/banners/Полярная_ночь1.png" alt="" class="imgSlider3 blockSlider3">
                    <img src="img/banners/Полярная_ночь2.jpg" alt="" class="imgSlider3">
                    <img src="img/banners/Полярная_ночь3.png" alt="" class="imgSlider3">
                    <button class="prev3 controlls3 prev">&#10094</button>
                    <button class="next3 controlls3 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Полярная ночь</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga4 manga">
                <div class="slider">
                    <img src="img/banners/Принцесса_Трупозуб1.jpg" alt="" class="imgSlider4 blockSlider4">
                    <img src="img/banners/Принцесса_Трупозуб2.jpg" alt="" class="imgSlider4">
                    <img src="img/banners/Принцесса_Трупозуб3.jpg" alt="" class="imgSlider4">
                    <button class="prev4 controlls4 prev">&#10094</button>
                    <button class="next4 controlls4 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Принцесса Трупозуб</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga5 manga">
                <div class="slider">
                    <img src="img/banners/дьявольский остров1.jpg" alt="" class="imgSlider5 blockSlider5">
                    <img src="img/banners/дьявольский остров2.jpg" alt="" class="imgSlider5">
                    <img src="img/banners/дьявольский остров3.png" alt="" class="imgSlider5">
                    <button class="prev5 controlls5 prev">&#10094</button>
                    <button class="next5 controlls5 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Дьявольский остров</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga6 manga">
                <div class="slider">
                    <img src="img/banners/бескрайняя_тьма1.jpg" alt="" class="imgSlider6 blockSlider6">
                    <img src="img/banners/бескрайняя_тьма2.jpg" alt="" class="imgSlider6">
                    <img src="img/banners/бескрайняя_тьма3.jpg" alt="" class="imgSlider6">
                    <button class="prev6 controlls6 prev">&#10094</button>
                    <button class="next6 controlls6 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Бескрайняя тьма</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga7 manga">
                <div class="slider">
                    <img src="img/banners/Милый дом1.jpg.crdownload" alt="" class="imgSlider7 blockSlider7">
                    <img src="img/banners/Милый дом2.jfif" alt="" class="imgSlider7">
                    <img src="img/banners/Милый дом3.jfif" alt="" class="imgSlider7">
                    <button class="prev7 controlls7 prev">&#10094</button>
                    <button class="next7 controlls7 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Милый дом</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga8 manga">
                <div class="slider">
                    <img src="img/banners/Выжить_в_романе1.jpg" alt="" class="imgSlider8 blockSlider8">
                    <img src="img/banners/Выжить_в_романе2.jpeg" alt="" class="imgSlider8">
                    <img src="img/banners/Выжить_в_романе3.jpg" alt="" class="imgSlider8">
                    <button class="prev8 controlls8 prev">&#10094</button>
                    <button class="next8 controlls8 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Выжить в романе</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga9 manga">
                <div class="slider">
                    <img src="img/banners/Дорохедоро1.jpg.crdownload" alt="" class="imgSlider9 blockSlider9">
                    <img src="img/banners/Дорохедоро2.jpg" alt="" class="imgSlider9">
                    <img src="img/banners/Дорохедоро3.jpg" alt="" class="imgSlider9">
                    <button class="prev9 controlls9 prev">&#10094</button>
                    <button class="next9 controlls9 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                </div> -->
                    <a href="">Дорохедоро</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga10 manga">
                <div class="slider">
                    <img src="img/banners/Жуткий кот1.jpg" alt="" class="imgSlider10 blockSlider10">
                    <img src="img/banners/Жуткий кот2.png" alt="" class="imgSlider10">
                    <img src="img/banners/Жуткий кот3.jpeg" alt="" class="imgSlider10">
                    <button class="prev10 controlls10 prev">&#10094</button>
                    <button class="next10 controlls10 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Жуткий кот - Кот и моя странная жизнь</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga11 manga">
                <div class="slider">
                    <img src="img/banners/Голос в темноте1.jpg" alt="" class="imgSlider11 blockSlider11">
                    <img src="img/banners/Голос в темноте2.png" alt="" class="imgSlider11">
                    <img src="img/banners/Голос в темноте3.jpg" alt="" class="imgSlider11">
                    <button class="prev11 controlls11 prev">&#10094</button>
                    <button class="next11 controlls11 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Голос в темноте</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga12 manga">
                <div class="slider">
                    <img src="img/banners/Клуб самоубийц3.jpg" alt="" class="imgSlider12 blockSlider12">
                    <img src="img/banners/Клуб самоубийц1.jpg" alt="" class="imgSlider12">
                    <img src="img/banners/Клуб самоубийц2.jpg.crdownload" alt="" class="imgSlider12">
                    <button class="prev12 controlls12 prev">&#10094</button>
                    <button class="next12 controlls12 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Клуб самоубийц</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga13 manga">
                <div class="slider">
                    <img src="img/banners/Загадка Амигарского ущелья1.jpg" alt="" class="imgSlider13 blockSlider13">
                    <img src="img/banners/Загадка Амигарского ущелья2.jpg" alt="" class="imgSlider13">
                    <img src="img/banners/Загадка Амигарского ущелья1.jpg" alt="" class="imgSlider13">
                    <button class="prev13 controlls13 prev">&#10094</button>
                    <button class="next13 controlls13 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Загадка Амигарского ущелья</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga14 manga">
                <div class="slider">
                    <img src="img/banners/Голова дракона1.jpg" alt="" class="imgSlider14 blockSlider14">
                    <img src="img/banners/Голова дракона2.jpg" alt="" class="imgSlider14">
                    <img src="img/banners/Голова дракона3.jpg" alt="" class="imgSlider14">
                    <button class="prev14 controlls14 prev">&#10094</button>
                    <button class="next14 controlls14 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Голова дракона</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga15 manga">
                <div class="slider">
                    <img src="img/banners/Осуждение1.jpg" alt="" class="imgSlider15 blockSlider15">
                    <img src="img/banners/Осуждение2.jpg" alt="" class="imgSlider15">
                    <img src="img/banners/Осуждение3.jpg" alt="" class="imgSlider15">
                    <button class="prev15 controlls15 prev">&#10094</button>
                    <button class="next15 controlls15 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Осуждение</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga16 manga">
                <div class="slider">
                    <img src="img/banners/Кафе Таро1.jpg" alt="" class="imgSlider16 blockSlider16">
                    <img src="img/banners/Кафе Таро 2.jpg" alt="" class="imgSlider16">
                    <img src="img/banners/Кафе Таро 3.jpg" alt="" class="imgSlider16">
                    <button class="prev16 controlls16 prev">&#10094</button>
                    <button class="next16 controlls16 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                </div> -->
                    <a href="">Кафе Таро</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga17 manga">
                <div class="slider">
                    <img src="img/banners/Магазинчик ужасов1.jpg" alt="" class="imgSlider17 blockSlider17">
                    <img src="img/banners/Магазинчик ужасов2.jpg" alt="" class="imgSlider17">
                    <img src="img/banners/Магазинчик ужасов3.jpg" alt="" class="imgSlider17">
                    <button class="prev17 controlls17 prev">&#10094</button>
                    <button class="next17 controlls17 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Магазинчик ужасов</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga18 manga">
                <div class="slider">
                    <img src="img/banners/Принцесса_Трупозуб1.jpg" alt="" class="imgSlider18 blockSlider18">
                    <img src="img/banners/Принцесса_Трупозуб2.jpg" alt="" class="imgSlider18">
                    <img src="img/banners/Принцесса_Трупозуб3.jpg" alt="" class="imgSlider18">
                    <button class="prev18 controlls18 prev">&#10094</button>
                    <button class="next18 controlls18 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Принцесса Трупозуб</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga19 manga">
                <div class="slider">
                    <img src="img/banners/дьявольский остров1.jpg" alt="" class="imgSlider19 blockSlider19">
                    <img src="img/banners/дьявольский остров2.jpg" alt="" class="imgSlider19">
                    <img src="img/banners/дьявольский остров3.png" alt="" class="imgSlider19">
                    <button class="prev19 controlls19 prev">&#10094</button>
                    <button class="next19 controlls19 next">&#10095</button>
                </div>
                <!-- <div class="dotBlock">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
                    <a href="">Дьявольский остров</a>
                    <button class="v_korziny">В корзину</button>
            </div>
            <div class="manga20 manga">
                <div class="slider">
                    <img src="img/banners/бескрайняя_тьма1.jpg" alt="" class="imgSlider20 blockSlider20">
                    <img src="img/banners/бескрайняя_тьма2.jpg" alt="" class="imgSlider20">
                    <img src="img/banners/бескрайняя_тьма3.jpg" alt="" class="imgSlider20">
                    <button class="prev20 controlls20 prev">&#10094</button>
                    <button class="next20 controlls20 next">&#10095</button>
                </div>
                    <a href="">Бескрайняя тьма</a>
                    <button class="v_korziny">В корзину</button>
            </div>
        </div>
        <div class="pagesManga" id="pagesManga"><a href="">1</a><a href="">2</a><a href="">3</a></div>
    </main>
    <script src="js/mangaprice.js"></script>
</body>

</html>