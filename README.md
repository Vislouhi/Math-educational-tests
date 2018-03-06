<h1 align="center">Обучающие тесты по математике. Мобильное приложение.</h1>

<h2>Блоки обучающих тестов</h2>
<h3>Изучение цифр</h3>
<p>Палочки -> Цифра</p>
<p>Цифра -> Палочки</p>
<p>Цифра -> Текст</p>
<p>Текст -> Цифра</p>

<h3>Больше и меньше</h3>
<p>Что больше</p>
<p>Что меньше</p>
<p>На сколько больше</p>
<p>На сколько меньше</p>

<h3>Единицы измерения</h3>
<p>См -> мм</p>
<p>Мм -> см</p>
<p>М -> См</p>
<p>См -> М</p>

<h3>Задачи</h3>
<p>Задачи в одно действие</p>
<p>Задачи в два действия</p>
<p>Задачи в три действия</p>


<h1 align="center">Техническое задание</h1>

<h2>Интерфейс и навигация</h2>
<p>Создать интерфейс используя html5, css, bootstrap и javascript.</p>
<p>В интерфейсе должны быть следующие элементы: форма регистрации, форма авторизации, меню (смена пользователя, тесты, настройки) и каталог тестов.</p>
http://bootstrap-4.ru/docs/4.0/examples/
<p>В первую очередь создать простые формы для регистрации и авторизации.</p>
<p>По нажатию кнопки генерировать запрос и получить ответ следующим способом:</p>
https://github.com/Vislouhi/Math-educational-tests/blob/master/js/htmlRequest.html
<p>При успешной регистрации или авторизации войти в меню задач, иначе вывести сообщение об ошибке.</p>



<h2>Регистрация, авторизация, загрузка тестов</h2>
<p>Создать механизм регистрации используя mysql и php.</p>
<p>Зарегистрироваться на бесплатном хостинге. Организовать базу данных для хранения информации о пользователях, и для хранения содержания тестов.</p>
<p>Настроить обмен данными между сервером и приложением</p>
<p>На php создать страницу администрирования базы данных. Должны быть следующие возможности: cоздать пустые таблицы, удалить все имеющиеся таблицы, удалить пользователя, добавить пользователя, удалить текст задачи, добавить текст задачи, добавить пункт меню, удалить пункт меню</p>

пример подключения к базеданных:

https://github.com/Vislouhi/Math-educational-tests/blob/master/php/mysql.php

<p>Структура таблиц:</p>
Tabale1
<p>|id(int)|Name(string)|Email(string)|Password(string)|empt1|empt2|empt3|empt4|empt5|t1(int)|t2(int)|t3(int)|t4(int)|...t20(int)|</p>
Table2
<p>|id(int)|Head(string)|Text1(string)|Text2(string)|Text3(string)|Par1(int)|Par2(int)|Par3(int)|</p>
Table3
<p>|Par(int)|Head(string)|picName(string)|</p>
<p>Par(int) -  если 1 то это каталог, если 2 то задача. 
  Head(string) - название каталога или задачи.
</p>

<p>Создать php файлы обрабатывающие следующие запросы:</p>
<p>authUser.php?email=ivan@ivan.com&pass=123456</p>
<p>Вывод в формате json:
  {{"status":"ok"},{"errCode":"0"},{"id":"123"},{"Name":"Ivan"},{"Email":"ivan@ivanov"},{"empt1":"0"}.....}.
  
  |id|Name|Email|empt1|empt2|empt3|empt4|empt5|t1(int)|t2(int)|t3(int)|t4(int)|...t20(int)|</p>
<p>createUser.php?name=ivan&email=ivan@ivan.com&pass=123456&empt1=0&empt2=0&...</p>

Вывод в формате json:
  {{"status":"ok"},{"errCode":"0"}}.
<p>deleteUser.php?email=ivan@ivan.com</p>
<p>Вывод в формате json:
  {{"status":"ok"},{"errCode":"0"}}.<p>
<p>changeUserPar.php?parName=t4&val=25</p>
<p>Вывод в формате json:
  {{"status":"ok"},{"errCode":"0"}}.<p>
<p>changeUserPar.php?parName=t4&val=25</p>

<p>Вывод в формате json:
  {{"status":"ok"},{"errCode":"0"}}.<p>


<p>listTask.php</p>
<p>Вывод в формате json:
  {{"title":"Цифры",{"head":"Палочки -> цифры"},{"head":"Цифры->палочки"}...},}.<p>

<p>addTask.php</p>
<p> Методом POST передать строку формата json  {{"title":"Цифры",{"head":"Палочки -> цифры"},{"head":"Цифры->палочки"}...},}</p>

<p>cretateTask.php?Head=Задача1&Text1=У васи было ...</p>
<p>Вывод в формате json:
  {{"status":"ok"},{"errCode":"0"}}.<p>

<p>deleteTask.php?head=Цифры</p>
<p>Вывод в формате json:
  {{"status":"ok"},{"errCode":"0"}}.<p>
<p>addTaskTree.php?par=2&head=Цифры&head1=Новая задача</p>
<p>Вывод в формате json:
  {{"status":"ok"},{"errCode":"0"}}.<p>

<p>createTable1.php</p>
<p>createTable2.php</p>
<p>createTable3.php</p>

<p>deleteTable1.php</p>
<p>deleteTable2.php</p>
<p>deleteTable3.php</p>


<h2>Компиляция программы и тестирование</h2>
<p>С помощю облачного сервиса PhoneGap скомпилировать программу "HelloWorld". Программу взять с GitHub.</p>
<p>Подключить к этой программе заготовку с тестами из папки "www".</p>
<p>Протестировать программу на эмуляторе Nox.</p>
<p>Подключать к программе обновления и проводить их тестирование, исправлять ошибки.</p>
<p>Оптимизировать код.</p>


https://github.com/phonegap/phonegap-template-hello-world.git
Отметить галочками Enable debug  и Enable Hydration.

Использовать для сборки следующую конфигурацию.
https://github.com/Vislouhi/Math-educational-tests/blob/master/config/config.xml

Попробовать связку мобильного приложения Phonegap и соответствующего приложения на PC.

Сначала нужно из эмулятара android успешно пропиногвать PC.

Установить на эмулятор и PC приложение phonegap. Запустить приложение "HelloHell" :))

<h2>Содержание тестов</h2>
<p>Создание строк для генерации рандомных тестов.</p>
<p>Разработка структуры строки.</p>
<p>Разработка процедуры превращающей строку в текст задачи и варианты ответов.</p>
<p>Разработка (или поиск готовой) процедуры склоняющей существительные в зависимости от числа.</p>
<p>Пример строки для генерации текста задачи:</p>
<p>В $w1,магазине,сарае,гараже,...$ было $v1,1,2,3,...$ мешка с $w2,картошкой,морковкой,луком,...$. Из него забрали 
$v2,1,2,3,...$ мешков с $w2$.Сколко мешков осталось в $w1$?</p>
<p>Пример строки для генерации вариантов ответов:</p>
<p>D1=v1+v2,D2=v1-v3.</p>

Формат строки:

В $w1,магазине,сарае,гараже,...$ было |$v1,1,2,3,...$#$w2,мешок_мешка_мешков,ящик_ящика_ящиков,сумка_сумки_сумок$|

|15#слово_слова_слов| - эта запись означает, что слово нужно склонять, в зависимости от числа. Порядок вариантов склонений:
одно слово, два слова, пять слов.

$[parameter],слово1,слово2,слово3...$ - запись указывает на то, что следует выбрать слово случайным образом. [parameter]=v1..v3,w1..w3.

v1 - v указывает на число, 1 идентификатор (нужен чтобы запомнить, какое число выбрано).

w1 - v указывает на слово, 1 идентификатор (нужен чтобы запомнить, какое слово выбрано).


Пример обработки строки для задачи:

https://github.com/Vislouhi/Math-educational-tests/blob/master/js/randomTasks.html

Пример решения задачи о склонении:

https://github.com/Vislouhi/Math-educational-tests/blob/master/js/Sklonenie.html


<h2>Кэширование данных</h2>
<p>Воспользоваться mysql для phonegap, чтобы хранить данные. Строки запросов будут такими же как и в кодах для серверной части программы</p>
<p>Скомпилировать пример http://docs.phonegap.com/en/2.0.0/cordova_storage_storage.md.html</p>
<p>Взять строки запросов для mysql у разработчиков php. Обеспечить их работу в локальной базе данных. Создать события: база данных загружена, база данных сохранена.</p>

<h2>Графика</h2>
<p>Для каждого пункта меню сделать поясняющую картинку.</p>
<p>Создать картинку для экрана загрузки.</p>
<p>Создать картинку для ярлыка.</p>

<h1>Первоочередные задачи на 28е февраля</h1>
<p>Создать приложение регистрирующее и авторизующее пользователей.</p>

<h2>Организатору</h2>
<p>Создать папку "www"  на studrab. В папке создать подпапки "images" и "code", и файл "index.html".</p>
<p>Создать файл "requestForms.txt". Получить от разработчиков php строки запросов, и занести их в файл.</p>
<p>От дизайнеров получить заготовки файлов с иконками. Разместить их в images.</p>
<p>От разработчиков интерфейса получить index.html, положить в www.</p>


<h2>Разработчикам php mysql</h2>
В первую очередь создать следующие файлы: 
<p>createTable1.php</p>
<p>deleteTable1.php</p>
<p>createUser.php?name=ivan&email=ivan@ivan.com&pass=123456&empt1=0&empt2=0&...</p>
<p>authUser.php?email=ivan@ivan.com&pass=123456</p>
Передать организатору строки с запросами.



<h2>Разработчикам интерфейса html5</h2>
В первую очередь следует создать рабочую форму для регистрации без "наворотов", и отдать файл index.html организатору.
Должен отправляться запрос и приходить ответ. Ответ вывести через alert('response');


<h2>Сборщикам PhoneGap</h2>
Скомпилировать Hello World
Внести исправления в config.xml
Проконтролировать ссылки на изображения. Закомментировать те ссылки для которых нет изображений.
Получить от организатора состовляющие программы. Произвести тестирование в браузере.
Скомпилировать в phonegap. Протестировать на эмуляторе.

<h2>Дизайнерам</h2>

Создать следующие файлы:

src="www/res/icon/android/drawable-ldpi-icon.png"               density="ldpi"

src="www/res/icon/android/drawable-mdpi-icon.png"               density="mdpi"

src="www/res/icon/android/drawable-hdpi-icon.png"               density="hdpi"

src="www/res/icon/android/drawable-xhdpi-icon.png"              density="xhdpi"

src="www/res/icon/android/drawable-xxhdpi-icon.png"             density="xxhdpi"

src="www/res/icon/android/drawable-xxxhdpi-icon.png"            density="xxxhdpi"

src="www/res/screen/android/drawable-land-ldpi-screen.png"      density="land-ldpi"

src="www/res/screen/android/drawable-land-mdpi-screen.png"      density="land-mdpi"

src="www/res/screen/android/drawable-land-hdpi-screen.png"      density="land-hdpi"

src="www/res/screen/android/drawable-land-xhdpi-screen.png"     density="land-xhdpi"

src="www/res/screen/android/drawable-land-xxhdpi-screen.png"    density="land-xxhdpi"

src="www/res/screen/android/drawable-land-xxxhdpi-screen.png"   density="land-xxxhdpi"

src="www/res/screen/android/drawable-port-ldpi-screen.png"      density="port-ldpi"

src="www/res/screen/android/drawable-port-mdpi-screen.png"      density="port-mdpi"

src="www/res/screen/android/drawable-port-hdpi-screen.png"      density="port-hdpi"

src="www/res/screen/android/drawable-port-xhdpi-screen.png"     density="port-xhdpi"

src="www/res/screen/android/drawable-port-xxhdpi-screen.png"    density="port-xxhdpi"

src="www/res/screen/android/drawable-port-xxxhdpi-screen.png"   density="port-xxxhdpi"


http://iconhandbook.co.uk/reference/chart/android/

Отдать эти файлы организатору.
Продолжать художественную работу.


