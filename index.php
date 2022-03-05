<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Учет оргтехники</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
<body style="background-image: url('images/plan.jpeg');">
<main>
    <header>
        <nav class="dws-menu">
            <ul>
                <li><a href="#"><i class=""></i>Картриджи</a>
                    <ul>
                        <li><a id="get_cartridge"href="#">Список всех картриджей</a></li>
                        <li><a id="write_cartridge" href="#">Внести картридж в базу</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class=""></i>Персональные компьютеры</a></a>
                    <ul>
                        <li><a id="get_pc" href="#">Список всех компьютеров</a></li>
                        <li><a id="write_pc" href="#">Внести компьютер в базу</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class=""></i>Принтеры</a>
                    <ul>
                        <li><a id="get_printer" href="#">Список всех принтеров</a></li>
                        <li><a id="write_printer" href="#">Внести принтер в базу</a></li>
                    </ul>
                </li>
<!--                <li><a href="#"><i class=""></i>Авторизация</a></li>-->
<!--                <li><a href="#"><i class=""></i>Регистрация</a></li>-->
            </ul>
        </nav>
    </header>

    <div class="cartridge_form">
        <h3>Внесите информацию о картридже</h3>
        <form method="post" class="form-index">
            <input type="hidden" name="hidden" value="cartridge">
            <label for="">Номер картриджа
                <input type="text" name="cartridge_number" placeholder="">
            </label>
            <label for="">Модель картриджа
                <input type="text" name="cartridge_model" placeholder="">
            </label>
            <label for="">Номер принтера
                <input type="text" name="printer_number" placeholder="">
            </label>
            <label>Отдел сотрудника
                <input type="text" name="department" placeholder="">
            </label>
            <label>Контактный номер сотрудника
                <input type="tel" name="tel_worker" placeholder="">
            </label>
            <div class="container">
                <button id="btn" type="submit">Записать информацию в базу</button>
            </div>
        </form>
    </div>

    <div class="pc_form">
        <h3>Внесите информацию о ПК</h3>
        <form method="post" class="form-index">
            <input type="hidden" name="hidden" value="pc">
            <label for="">Номер ПК
                <input type="text" name="pc_number" placeholder="">
            </label>
            <label for="">Модель
                <input type="text" name="pc_model" placeholder="">
            </label>
            <label for="">Дата выпуска
                <input type="date" name="pc_release_date" placeholder="">
            </label>
            <label>Срок службы
                <input type="text" name="pc_service_life" placeholder="">
            </label>
            <label>Состав
                <input type="text" name="pc_structure" placeholder="">
            </label>
            <label>Расположение
                <input type="text" name="pc_location" placeholder="">
            </label>
            <label>Ответственный
                <input type="text" name="pc_responsible" placeholder="">
            </label>
            <label>Примечание
                <input type="text" name="pc_note" placeholder="">
            </label>
            <div class="container">
                <button id="btn" type="submit">Записать информацию в базу</button>
            </div>
        </form>
    </div>

    <div class="printer_form">
        <h3>Внесите информацию о принтере</h3>
        <form method="post" class="form-index">
            <input type="hidden" name="hidden" value="printer">
            <label for="">Номер принтера
                <input type="text" name="printer_number" placeholder="">
            </label>
            <label for="">Модель
                <input type="text" name="printer_model" placeholder="">
            </label>
            <label for="">Дата выпуска
                <input type="date" name="printer_release_date" placeholder="">
            </label>
            <label>Срок службы
                <input type="text" name="printer_service_life" placeholder="">
            </label>
            <label>Расположение
                <input type="text" name="printer_location" placeholder="">
            </label>
            <label>Ответственный
                <input type="text" name="printer_responsible" placeholder="">
            </label>
            <div class="container">
                <button id="btn" type="submit">Записать информацию в базу</button>
            </div>
        </form>
    </div>

    <div id="send_success" class="send_success">
        <p>Данные успешно добавлены в базу!</p>
    </div>
    <div id="send_failed" class="send_failed">
        <p>Данные не были добавлены в базу. Смотри логи.</p>
    </div>
    <div class="output"></div>
</main>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>


