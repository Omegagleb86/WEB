<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes</title>
    <link rel="stylesheet" href="css/styleMain.css">
    <link rel="icon" href="images/DarkLion.png">
    <!--
    <script src="script/script.js"></script>
    -->
</head>

<body>
    <!--
    <h1 id="elem">!!!!!!!!!!!!!!!!!!!!!</h1>
    -->
    <header>
        <section class="header1">
            <section class="header11">
                <div class="logo">
                    <a href="/index.php">
                        <img class="Lion" src="images/Lion.png" alt="Lion">
                        <img class="Refreshoes" src="images/Refreshoes.png" alt="Refreshoes">
                    </a>
                </div>
                <p class="pWork">
                    Время работы: 11:00 до 20:00
                </p>
                <div class="CircleForApps">
                    <img class="app" src="images/Whatsapp.png" alt="Whatsapp">
                </div>
                <div class="CircleForApps">
                    <img class="app" src="images/Instagram.png" alt="Instagram">
                </div>
            </section>
            <section class="header12">
                <div class="MarkerDiv">
                    <img class="Marker" src="images/Marker.png" alt="Marker">
                    <p class="MarkerText">
                        Lorem Ipsum is simply dummy text of the printing.
                    </p>
                </div>
                <div class="phone">
                    <img class="phoneIMG" src="images/Phone.png" alt="Telephone">
                    <p class="phoneText">
                        +7 (999) 999-09-99
                    </p>
                </div>
            </section>
        </section>
        <section class="header2">
            <div class="header21">
                <a href="/index.php">
                    Главная
                </a>
                <a href="/galery.html">
                    Галерея<img class="downArrow" src="images/downArrow.png" alt="Gallary">
                </a>
                <a href="#">
                    Контентная страница
                </a>
            </div>
        </section>
    </header>
    <main id="main">
        <img class="MainShoe" src="images/MainShoes.png" alt="Image of Shoe">
        <div class="MainContent">
            <div class="Inter">
                <p class="InterText">Заголовок H1</p>
                <p class="InterText">Font Inter 60px</p>
            </div>
            <H5>Хлебные крошки</H5>
            <div class="bread">
                <a class="breaddot" href="#">Главная - </a>
                <a class="breaddot" href="#">Главная - </a>
                <a class="breaddot" href="#">Главная</a>
            </div>
            <div class="EnterValuesMaindiv">
                <form method="POST">
                    <div class="EnterValues">
                        <p class="MainSection">Заполните поля</p>
                        <input class="Values" name="Ima" type="text" placeholder="Имя" required>
                        <input class="Values" name="telefon" type="tel" placeholder="Телефон" required>
                        <input class="Values" name="pochta" type="email" placeholder="E-mail" required>
                        <div class="EnterValues_div">
                            <input type="checkbox" required>
                            <p class="EnterValues_p">Соглашаюсь на обратку персональных данных</p>
                        </div>
                        <input class="btn" type="submit" value="Отправить">
                    </div>

                </form>
                <!--
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['Ima']);
                    $phone = htmlspecialchars($_POST['telefon']);
                    $email = htmlspecialchars($_POST['pochta']);
                ?>
                <div class="result">
                    <h2>Вы ввели следующие данные:</h2>
                    <div class="data-item">Имя: <?php echo $name; ?></div>
                    <div class="data-item">Телефон: <?php echo $phone; ?></div>
                    <div class="data-item">Почта: <?php echo $email; ?></div>
                </div>

                <?php
                }
                ?>
                -->
                    <form>
                        <div class="EnterValues , EnterValues2">
                            <p class="MainSection">Авторизация</p>
                            <input class="Values" type="email" placeholder="Email" required>
                            <div class="Password">
                                <input class="Values" type="password" placeholder="Пароль"><img src="images/BackEye.png" required>
                            </div>
                            <div class="EnterValues_div">
                                <a class="recoveryPassword" href="#">Восстановить пароль</a>
                            </div>
                            <input class="btn" type="submit" value="Отправить">
                        </div>
                    </form>
            </div>

            
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['Ima']);
                    $phone = htmlspecialchars($_POST['telefon']);
                    $email = htmlspecialchars($_POST['pochta']);
                ?>
                <div class="result" style="
        
        border: solid #FFFF 1px;
        border-radius: 16px 16px 16px 32px;
        display: flex;
        padding-left: 1vw;
        padding-right: 1vw;
        margin: 2vw
        
        ">
                    <h2>Вы ввели следующие данные:</h2>
                    <div class="data-item" style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 2vw;
                    ">
                        Имя: <?php echo $name; ?>
                    </div>
                    <div class="data-item" style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 2vw;
                    ">
                        Телефон: <?php echo $phone; ?>
                    </div>
                    <div class="data-item" style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 2vw;
                    ">
                        Почта: <?php echo $email; ?>
                    </div>
                </div>

                <?php
                }
                ?>

            
            <section>
                <section>
                    <section>
                    
                        <p class="mainSelection">
                            Элементы чекбоксов, радио кнопок, выбор из списка
                        </p>
                        <div class="applicationDataBase_Main">
                            <div class="applicationDataBase">
                                <input type="checkbox">
                                <p>Соглашаюсь на обратку персональных данных</p>
                            </div>
                            <div class="applicationDataBase">
                                <input type="checkbox" value="yes">
                                <p>Соглашаюсь на обратку персональных данных</p>
                            </div>
                        </div>
                    </section>
                </section>
                <section class="selectionFromRadioList">
                    <div class="selectionFromRadioList_div"></div>
                    <p>Радио-кнопка 1</p>
                    <div class="selectionFromRadioList_div" id="Radio-button"></div>
                    <p>Радио-кнопка 1</p>
                    <div class="selectionFromRadioList_div"></div>
                    <p>Радио-кнопка 2</p>
                    <div class="selectionFromRadioList_div"></div>
                    <p>Радио-кнопка 2</p>
                    <div class="selectionFromRadioList_div"></div>
                    <p>Радио-кнопка 3</p>
                    <div class="selectionFromRadioList_div"></div>
                    <p>Радио-кнопка 3</p>
                </section>
                <p class="ChooseFromList">Выбор из списка</p>
                <section class="SC2">
                    <section class="twoLists">
                        <select class="Select">
                            <option>Lorem ipsun</option>
                            <option>Lorem ipsun, dolor smita</option>
                            <option>Lorem ipsun, dolor smita</option>
                            <option>Lorem ipsun, dolor smita</option>
                            <option>Lorem ipsun, dolor smita</option>
                            <option>Lorem ipsun, dolor smita</option>
                        </select>
                        <select class="Select">
                            <option>Lorem ipsun</option>
                            <option>Lorem ipsun, dolor smita</option>
                            <option>Lorem ipsun, dolor smita</option>
                            <option>Lorem ipsun, dolor smita</option>
                            <option>Lorem ipsun, dolor smita</option>
                            <option>Lorem ipsun, dolor smita</option>
                        </select>
                    </section>
                    <section class="Kakugodno">
                        <div class="Neup">
                            <p>неупорядоченный</p>
                            <ul>
                                <li>Lorem ipsun, dolor smita</li>
                                <li>Lorem ipsun, dolor smita</li>
                                <li>Lorem ipsun, dolor smitaLorem ipsun, dolor smita</li>
                                <li>Lorem ipsun, dolor smita</li>
                                <li>Lorem ipsun, dolor smitaLorem ipsun, dolor smita</li>
                                <li>Lorem ipsun, dolor smita</li>
                                <li>Lorem ipsun, dolor smita</li>
                            </ul>
                        </div>
                        <div class="Neup">
                            <p>упорядоченный</p>
                            <ol>
                                <li>
                                    <ul>
                                        <p>Lorem ipsun, dolor smita</p>
                                        <li>Lorem ipsun, dolor smita</li>
                                        <li>Lorem ipsun, dolor smita</li>
                                        <li>Lorem ipsun, dolor smita</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <p>Lorem ipsun, dolor smita</p>
                                        <li>Lorem ipsun, dolor smita</li>
                                        <li>Lorem ipsun, dolor smita</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </section>
                </section>
                <section class="SectionBlockquote">
                    <h3>Блок цитаты blockquote</h3>
                    <div class="blockquote">
                        <div class="blockquoteIN">
                            <p id="THE“"><i>“</i></p>
                            <blockquote>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </blockquote>
                        </div>
                        <p style="margin-left: 6vw;"><strong><i>Lorem Ipsum</i></strong></p>
                    </div>
                </section>
                <div class="MAP">

                    <div class="divMAP">
                        <p class="MainTextDivMap">Адреса</p><br>
                        <p class="TextDivMap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="footerIMG">
            <img src="/images/Lion.png" alt="" id="footer_IMG1">
            <div class="footer_text">
                <img class="Refreshoes" src="images/Refreshoes.png" alt="Refreshoes" id="footer_IMG2">
                <p class="footer_Text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <div class="Links">
            <div class="numberBTN">
                <p id="footer_links_text">Lorem Ipsum is simply dummy text of the printing and </p>
                <div class="phone" id="footer_Phone">
                    <img class="phoneIMG" src="images/Phone_black.png" alt="Telephone">
                    <p class="phoneText">
                        +7 (999) 999-09-99
                    </p>
                </div>
            </div>
            <div class="links_links">
                <a href="index.php">Главная</a>
                <a href="#main">Контентная страница</a>
                <!-- СДЕЛАТЬ ТАК ЧТОБЫ HEAD БЫЛ ВЫШЕ КАРТЫ, ЭТО ВАЖНО -->
                <a href="#">Галерея</a>
                <a href="#">Видео галерея</a>
                <a href="#">Фото галерея</a>
            </div>
        </div>
    </footer>
</body>

</html>
