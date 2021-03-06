<?php
/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 28.03.2016
 * Time: 17:17
 */
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Валюватый Вячеслав Евгеньевич - резюме</title>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">

</head>
<body>
<!-- NEED TO USE
    test fetch
    - h1
    - img
    - ul
    - p
    - <a>
- hrefs to soc.network as img
- tables
-style

-->

<div class="content">

    <h5 id="created"><i>Создано 19.03.2016</i></h5>
    <h1 class="header"><?=$name?></h1>
    <h3 class="header">Junior PHP программист. <span style="font-family: 'Roboto Condensed'">50 000$/мес.</span></h3>
    <p>
Полная или удаленная работа.
    </p>

    <!-- img profil -->
    <a href="#"><img src="img/no-image.jpg" class="photo_profil"></a>

    <table class="t_contact">
        <tr>
            <td>Мобильный телефон:</td>
            <td><?=$tel?></td>
        </tr>
        <tr>
            <td>Эл. почта</td>
            <td><a href="mailto:<?=$mail?>"><?=$mail?></a></td>
        </tr>
        <tr>
            <td>Социальные сети:</td>
            <td>
                <a href="http://twitter.com"><img src="img/twitter.png" class="social_network"></a>
                <a href="http://twitter.com"><img src="img/as.png" class="social_network"></a>
                <a href="http://twitter.com"><img src="img/evernote.png" class="social_network"></a>
                <a href="http://twitter.com"><img src="img/cloud.png" class="social_network"></a>
                <a href="http://twitter.com"><img src="img/be.png" class="social_network"></a>
            </td>
        </tr>
        <tr>
            <td>Дата рождения:</td>
            <td><?=$dob?></td>
        </tr>
        <tr>
            <td>Гражданство:</td>
            <td>украинец</td>
        </tr>
        <tr>
            <td>Семейное положение:</td>
            <td>не женат, детей нет</td>
        </tr>
        <tr>
            <td>Адрес:</td>
            <td><?=$addres?></td>
        </tr>
    </table><br><br>

<!---------------------------------- start block "Work Expiriens" -------------------------------->
<div class="yellow_block">
    <h1 class="header">Опыт работы:</h1>
    <span class="title_position">Контент-менеджер, менеджер отдела продаж</span>
    <p>
с 05.2013 по 06.2014 <span class="specify">(1 год 1 месяц)</span>
    </p>
    <span>ООО "Шарашкина Компани". </span>
    <span class="specify">Автомобильные аксессуары.</span>
    <p>Обязанности:</p>
    <ul>
        <li>Активный поиск клиентов</li>
        <li>Ведение переговоров</li>
        <li>Работа с клиентами </li>
        <li>Контроль работы дистрибьюторов</li>
        <li>Контроль дебиторской задолженности</li>
    </ul>
    <!-- block -->
    <span class="title_position">Менеджер отдела продаж</span>
    <p>
с 01.2010 по 08.2010 <span class="specify">(7 месяцев)</span>
    </p>
    <span>ООО "Конторко ЛТД". </span>
    <span class="specify">(Системы водоснабжения, отопления, канализации).</span>
    <p>Обязанности:</p>
    <ul>
        <li>Активный поиск клиентов</li>
        <li>Ведение переговоров</li>
        <li>Работа с клиентами </li>
        <li>Контроль работы дистрибьюторов</li>
        <li>Контроль дебиторской задолженности</li>
    </ul>
    <br>
</div>
    <!---------------------------------- end of block "Work Expiriens" -------------------------------->
<div class="education">
    <h1 class="header">Образование:</h1>
    <span class="name_university">Международный транспортный университет, Нью-Йорк.</span>
    <br>
    <span class="status_edu">Высшее: </span>Дизайн и проектирование.
    <span>с 01.2014 по 08.2019 </span><span class="specify">(5 лет)</span>
    <!-- block -->
    <br>
    <br>
    <span class="name_university">Национальный авиационный университет, Киев.</span>
    <br>
    <span class="status_edu">Среднее:</span>Защита информации.
    <span>с 01.2009 по 08.2014 </span><span class="specify">(5 лет)</span>
</div>
    <!---------------------------------- start block "Additional Information" -------------------------------->
<div class="yellow_block">
    <h1 class="header">Дополнительная информация:</h1>
    <p>
        <?=$about?>
    </p>
</div>
</body>
</html>
