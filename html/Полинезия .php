<?php
require "coment.php";
if (isset($_POST['send'])) {
  if (trim($_POST['name']) == "" || trim($_POST['message']) == "" || rim($_POST['subject']))
  {
    $err = "Заполните все поля!";
  } else {
    $koments = R::dispense('koments');
    $koments->name = $_POST['name'];
    $koments->subject = $_POST['subject'];
    $koments->message = $_POST['message'];
    R::store($koments);
    header('location: /');
  }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/Полинезия.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/bfec730d56.js" crossorigin="anonymous"></script>
</head>
<body>
      <script src="../js/app.js"></script>
     

<article>
  <header>
    <h1>
      <a href="#">Полинезия
      </a>
    </h1>
    <p> В переводе с греческого слово «Полинезия» означает «множество островов»</p>
  </header>
  <div class="content">
    <br>
    <img src="../img/img140.jpg" class="Выборг">
    <br>
    <p>Полинезия — архипелаг, включающий Маркизские острова. Природа на островах архипелага роскошна, но есть отличия в климатических условиях. Обусловлено это происхождением островов, одни из них вулканического происхождения, другие являются коралловыми. На вулканических есть реки и озера, огромное разнообразие флоры и фауны. На коралловых атоллах из-за нехватки пресной воды растительности меньше, а рек вообще нет.</p>
    <br>
    <p>Природа на коралловых островах великолепна по-своему: великолепный климат, прекрасные пляжи, непроходимые заросли экзотической растительности, красота коренных жительниц островов — все это характерно для Французской Полинезии.</p>
    <br>
    <p>Есть, правда, один минус — удаленность островов, хотя многие считают этот не недостатком, а большим плюсом. Здесь не встретишь толпы туристов, предпочитающих не столь дальние поездки. А весьма длительный перелет полностью компенсируется наслаждением, полученным во время отдыха.</p>
    <br>
    <p>Население островов, несмотря на кажущуюся уединенность, превышает 280 тыс. человек. Не стоит считать площадь островов небольшой, она достигает четырех тысяч квадратных километров. Доход местных жителей в основном зависит от туризма, а еще здесь занимаются добычей акульих плавников и жемчуга со дна моря, высаживают плантации кокосовых пальм.</p>
    <br>
    <p>Удаленность позволила жителям островов сохранить свою самобытность. Туристам непременно нужно посмотреть местный свадебный обряд, понаблюдать за хождением аборигенов по горячим углям, встречей восхода дневного светила аборигенами.</p>
<br>
<p>На островах архипелага живут люди, отличающиеся скромностью, честностью и трудолюбием. Особо стоит отметить гостеприимство населения: хотя официальные языки архипелага французский и таитянский, большая часть персонала гостиниц и ресторанов, магазинов и увеселительных заведений знает английский язык.</p>
<br>
<h4>Климатические условия</h4>
<br>
<img src="../img/img141.jpg" class="Выборг">
<br>
<p>Климат на островах тропический,  здесь преобладают солнечные дни. Средняя температура воздуха — +27C, воды в лагунах прогревается в среднем до +26C. Здесь нет изнуряющей жары, воздух освежается постоянно дующими ветрами с океана. Год делится на два сезона: в период с декабря по февраль здесь жарко и влажно, а начиная с марта и заканчивая ноябрем царит  сухой сезон, не такой жаркий.</p>
<br>
<h4>История</h4>
<br>
<img src="../img/img142.jpg" class="Выборг">
<br>
<p>Освоение островных территорий сегодняшней Французской Полинезии началось в начале нашей эры. Вначале аборигены поселились на Маркизских островах. Когда здесь впервые появились европейские путешественники, самым развитым среди населения в социально-экономическом плане являлся народ, живший на острове Таити. Управляли им представители королевской династии Помаре. Франция взяла территории под протекторат в 1842 г.: архипелаг Туамоту, острова Сообщества, Маркизские, Тубуаи, Таити.</p>
<br>
<p>Потом, в 90-е годы 19 века, острова стали колониями. Новый статус архипелаг получил в 1946 г., теперь это была заморская территория Франции, а все коренные островитяне стали ее гражданами. С 2004 г. архипелаг называется заморским сообществом Франции.</p>
<br>
<h4>Как добраться</h4>
<br>
<img src="../img/img143.jpg" class="Выборг">
<br>
<p>Желающим отдохнуть на островах Французской Полинезии придется проделать неблизкий путь. Основная часть туристов летит через Токио, это самый короткий вариант. Проведя ночь в аэропорту столицы Японии, можно лететь на Таити. Японскую визу оформлять не надо. Но этот маршрут является самым дорогим для путешественников. Относительно бюджетный вариант — транзит через США. 
  Но маршрут мало популярен из-за необходимости получать американскую визу.</p>
  <br>
  <p>Сначала нужно лететь в Париж, потом следует прямой перелет в Лос-Анджелес, откуда есть рейс до Таити. Преимущество полета через Токио заключается в одной пересадке. К тому же в этом случае пляжный отдых на островах Французской Полинезии можно совместить с посещением Японии.</p>
  <br>
  <p>И хотя стоимость такого варианта не будет дешевле, он позволит осмотреть достопримечательности Страны восходящего солнца. Общее время перелета составит около суток, сюда входят и время пересадки в транзитных аэропортах.</p>
  <br>
  <h4>Транспортное сообщение</h4>
  <br>
  <img src="../img/img144.jpg" class="Выборг">
  <br>
  <p>Главным способом перемещения между островами является самолет. Аэропорты имеются на всех крупных островах. Рейсы обслуживаются местной авиационной компанией Air Tahiti, организовавшей авиасообщение между 47 островами.</p>
  <br>
  <p>В течение дня регулярно действующим общественным транспортом можно воспользоваться на двух островах: Таити и Муреа, причем на Таити его работа начинается в 5:30 и заканчивается в 17:30.</p>
  <br>
  <p>Между островами Таити и Муреа можно перемещаться на катерах или пассажирских катамаранах. Можно воспользоваться частным авиатранспортом: самолетом либо вертолетом.</p>
  <br>
  <h4>Столица архипелага</h4>
  <br>
  <img src="../img/img145.jpg" class="Выборг">
  <br>
  <p>Небольшой, но вполне современный город Папеэте, находящийся на острове Таити, окружен природными красотами. Здешний воздух насыщен приятным ароматом тропических цветов. Папеэте – лучший пример гармонии между девственной природой и урбанизмом. Жемчужиной столицы является Музей черного жемчуга, открытый в 1998 г. Робертом Ваном.

  </p>
  <br>
    <img src="../img/img146.jpg" class="Выборг">
    <br>
    <p>Многочисленные экспонаты музея поведают туристам о значимости черного жемчуга, его роли в самобытной истории и культуре островитян. Обязательно стоит пройти традиционный туристический маршрут, в ходе которого предстоит осмотр дома Марау Таарора, в котором жила последняя королева Таити, прогулка по экзотическому району столицы Ку Мен Тонг, посещение королевского пруда.</p>
    <br>
    <p>На площади Тарахой туристы любуются огромным баньяновым деревом. А еще стоит полюбоваться множеством зданий, построенных в колониальном стиле, Садами Пао Фай с огромной коллекцией экзотических растений.</p>
    <br>
    <h4>Топ-9 островов</h4>
    <br>
    <p>Среди всех островов Французской Полинезии стоит выделить 9 самых примечательных.</p>
    <br>
    <h5>Рангироа</h5>
    <br>
    <img src="../img/img147.jpg" class="Выборг">
    <br>
    <p>Остров напоминает гигантское жемчужное ожерелье, плавающее в южных водах Тихого океана. Этот коралловый атолл считается вторым по величине в мире. Рангироа покоряет туристов не только размерами, но и безупречной красотой.</p>
    <br>
    <p>Ежегодно сюда съезжаются любители дайвинга со всего мира, чтобы совершать длительные спуски в подводное царство. Во время таких путешествий можно встретить стадо дружелюбных дельфинов и даже одинокую тигровую акулу, плывущую куда-то по водам Тихого океана.</p>
<br>
<h5>Бора-Бора</h5>
<br>
<img src="../img/img148.jpg" class="Выборг">
<br>
<p>Этот остров называют романтическим. Он занимает девятое место в мировом рейтинге, потому что, кроме любования восхитительными пейзажами, вам предстоит встречаться со множеством групп туристов.</p>
<br>
<p>Благодаря красоте природы на побережье острова построены сотни роскошных курортов, и турагентства приглашают туристов отдыхать именно здесь. Именно сюда отправляли на отдых пять тысяч американских солдат в период Второй мировой войны — здесь не велись военные действия, поэтому можно было спокойно наслаждаться пребыванием в райских уголках.</p>
<br>
<img src="../img/img149.jpg" class="Выборг">
<br>
<p>После возвращения домой солдаты рассказывали об острове своим друзьям и знакомым, и вскоре о Бора-Бора узнал весь мир. На остров хлынули первые отдыхающие. Самым популярным является пляж Матира, который непременно стоит посетить, чтобы сделать свой отдых полноценным и максимально приятным.</p>
<br>
<h5>Раиатеа</h5>
<br>
<img src="../img/img150.jpg" class="Выборг">
<br>
<p>Этот священный остров туристы называют сказочным. Чтобы изучить Раиатеа, можно использовать различные способы: пешие прогулки к трем водопадам по тропическим лесам, подъем на горное плато в поисках редчайшего цветка тиаре, растущего только в этих местах.</p>
<br>
<img src="../img/img151.jpg" class="Выборг">
<br>
<p>На острове, кроме осмотра множества очаровательных пейзажей, вам покажут один из самых  древних храмов Полинезийского треугольника. Он называется Мараэ Тапутапуатеа и входит в список Всемирного наследия ЮНЕСКО!</p>
<br>
<h5>Муреа</h5>
<br>
<img src="../img/img152.jpg" class="Выборг">
<br>
<p>Этот волшебный остров расположен рядом с островом Таити, но, посетив его, каждый турист ощутит чувство отчужденности от цивилизации. Здесь никто не думает о возможных хлопотах, а просто растворяется в красоте окружающей природы, испытывая полное умиротворение. Каждый, кто приезжает на остров, сразу же влюбляется в него.</p>
<br>
<p>Один полюбит прогулки по тропическим лесам, медитации на краю высокой скалы, другой будет наслаждаться лучами ласкового солнца, шумом морских волн. Любители экстремальных ощущений смогут погружаться в волшебные воды Тихого океана, чтобы получать наслаждение от красоты подводного мира.</p>
<br>
<h5>Хуахине</h5>
<br>
<img src="../img/img153.jpg" class="Выборг">
<br>
<p>Остров называют Эдемским садом. Это отличное место, чтобы пополнить свои силы и жизненную энергию. В давние времена островом правили могущественные королевские семьи, их древние дома и сейчас являются украшением берегов и окружающих их гор.</p>
<br>
<p>Этот остров является идеальным местом для тех, кто предпочитает спокойный отдых. А если захочется немного развлечься, можно отправиться на экскурсию по пустующим изумрудным бухтам или посетить лагуну Хуахине — это место считается одним из лучших на острове. Там вы сможете покормить акул, сотнями плавающих в водах лагуны.</p>
<br>
<h5>Факарава</h5>
<br>
<img src="../img/img154.jpg" class="Выборг">
<br>
<p>Тщательно охраняемый ЮНЕСКО биосферный заповедник остров Факарава представляет собой большой коралловый атолл и отличается особенной красотой. Здесь можно заняться дайвингом, который подарит столько приятных ощущений, что ехать куда-то еще просто не захочется.</p>
<br>
<p>В утренние часы можно купаться в Тихом океане, после сиесты можно поехать на велосипеде к отдаленному пляжу, где, по преданию, жил сам Робинзон Крузо. И, конечно же, нельзя не посетить волшебный пляж с песком розового цвета.</p>
<br>
<h5>Хива-Оа</h5>
<br>
<img src="../img/img155.jpg" class="Выборг">
<br>
<p>На этом острове в свое время жили Гоген и Брель. В момент приземления на острове туристы просто теряют дар речи, а отлет сопровождается печалью и грустью. Природа острова зачаровывает своим волшебным видом, здесь множество чудесных садов и бескрайних песчаных пляжей, лесов, поражающих своей тишиной. Чтобы лучше узнать этот райский уголок, нужно посетить его пустые бухты, осмотреть древние поселения со стоящими в них статуями Тики.</p>
<br>
<img src="../img/img156.jpg" class="Выборг">
<br>
<h5>Нуку-Хива</h5>
<br>
<img src="../img/img157.jpg" class="Выборг">
<br>
<p>Хотите попасть в парк юрского периода? Тогда вам стоит полететь на остров Нуку-Хива. Он входит в состав Маркизских островов. Нуку-Хива отличается дикой красотой, и полуторачасовой рейс из аэропорта превратится в незабываемую поездку. Остров славится красотой своего побережья. В глубине джунглей вам ждут скрытые водопады.</p>
<br>
<p>Пляжи поражают своей девственной красотой, а восхитительные виды открываются туристам на каждом углу. Жители острова сделают все, чтобы познакомить вас со своим райским уголком, показать древнюю культуру Маркизских островов. Туристам покажут танец хака в центре древнего храма, поход охотников в гущу тропических лесов. Такие моменты не забываются.</p>
<br>
<h5>Маупити</h5>
<br>
<img src="../img/img158.jpg" class="Выборг">
<br>
<p>Крохотный островок Маупити считается вторым по красоте и одним из самых фантастических мест. На острове есть красивейшая лагуна, взглянуть на которую приезжают миллионы туристов. Хотя фактически Маупити представляет собой миниатюрную версию Бора-Бора, на самом деле он вызывает ощущение целого тихого мира.</p>
<br>
<p>Хотя островитян нельзя назвать очень гостеприимными, понять их можно — они борются за сохранение природы острова и боятся, что многочисленные туристы разрушат их уникальный маленький мир. Здесь нет курортов, но есть уютные семейные пансионаты, окруженные цветущими садами тропических растений.</p>
<br>
<h5>Кухня</h5>
<br>
<img src="../img/img159.jpg" class="Выборг">
<br>
<p>Кулинарные традиции архипелага можно смело назвать уникальными, старинные рецептуры племен, живущих в южной части тихоокеанской акватории, соединились с традициями французской, итальянской и даже китайской кухни. Местная кухня богата рыбой. которая подается в любом виде.</p>
<br>
<p>Попробовать экзотические яства можно и в роскошных ресторанах — на островах их множество, и в обычных забегаловках типа "лес рулеттес". Следуя тысячелетним традициям, готовят местные блюда в ямах, выкопанных в земле и выложенных камнями. Завернутые в листья банана продукты помещают на раскаленные угли или камни и запекают часами.</p>
<br>
<p>Приготовленные в таких печах (ахимаана) блюда называют "тамаараа".  Насладиться их неповторимым вкусом туристы могут и в простой деревенской харчевне, и в фешенебельном столичном ресторане.</p>
<br>
<p>Больше всего востребованы копченые плоды удивительного хлебного дерева, салат, приготовленный из папайи, свинина по-таитянски, все блюда из бананов, молочный поросенок, маринованная рыба "пуассон-крю", небольшие шашлычки "шиш" (их готовят из мяса, рыбы, даров моря), свинина в соусе карри, разнообразные стейки, жареные цыплята.</p>
<br>
<h4>Развлечения</h4>
<br>
<p>Полинезия предоставляет массу возможностей и любителям традиционных развлечений. На островах расположены развлекательные центры, казино и ночные клубы. По вечерам можно насладиться ужином в одном из множества ресторанов, отдохнуть в шикарном ночном клубе, попробовать обыграть казино, провести время в развлекательном центре. Находясь в Полинезии нужно съездить на экскурсии по островам, посетить музей жемчуга.</p>
<br>
<h4>Дайвинг</h4>
<br>
<img src="../img/img160.jpg" class="Выборг">
<br>
<p>Дайвинг на любом из островов Французской Полинезии поражает туристов своим высоким уровнем и уникальными особенностями. И новичкам, и профессионалам в этой области здесь созданы все условия.</p>
<br>
<p>В местных дайвинг-клубах работают инструкторы международного класса. Дайверы могут любоваться бесчисленным количеством и разнообразием форм и расцветки экзотических рыб, плавающих на дне океана.</p>
<br>
<p>У многих отелей есть в частном владении коралловые рифы, и их постояльцы могут часами разглядывать обитателей морских глубин. Основные дайвинг-центры расположены на островах Манихи, Тикехау, (атолл Крузенштерна), Тахаа, (Ванильный остров), Раиатеа, Муреа, Бора-Бора, Таити.</p>
<br>
<h4>Шоппинг</h4>
<br>
<p>На память об отдыхе из Французской Полинезии привозят изделия местных жителей из морских раковин и ракушек, ювелирные изделия с перламутром, фруктовые ликеры с ароматами экзотических плодов.</p>
<br>
<p>Очень ценится таитянский черный жемчуг — на острове он стоит вдвое или втрое дешевле по сравнению с ценниками в московских магазинах.Полинезия отличается от других стран фиксированными ценами. Торг здесь неуместен, местные жители считают его оскорблением, сомнением в честности продавца.</p>
<br>
<p>Большие магазины открыты с 8.00 до 17.00-17.30, перерыв с 12.00 до 13.30. Небольшие частные магазинчики и лавки в пригородах обычно работают до 22.00. Суббота — короткий день, в 11.00 крупные магазины прекращают свою работу.</p>
<br>
<h4>Виза</h4>
<br>
<p>Чтобы полететь во Французскую Полинезию, гражданам России и государств СНГ необходима виза, получить ее можно в консульстве Франции. Виза в Полинезию не является шенгенской, и получить ее намного проще. Отказы бывают редко. Для оформления требуется около двух недель.</p>
<br>
<p>Восемь неизвестных вам фактов о заморском сообществе Франции
Полинезия с ее сверкающими голубизной лагунами и высокими горными вершинами производит впечатление земли обетованной. Но на самом деле эти места намного уникальнее. Например, в чем особенности Таити по сравнению с другими островами? Сколько островов входит в состав этого сообщества? Что связывает страну с правительством Франции? Многие из вас не знают ответов не эти вопросы.</p>
  <br>
  <p>Надводное бунгало создали мастера Французской Полинезии. Первый надводный бунгало появился на острове Муреа в 1960-х годах, и вскоре такие домики, приглянувшиеся туристам всего мира, стали строить по всей стране.</p>
  <br>
  <p>Во Французской Полинезии находится самый фотографируемый остров на юге Тихого океана — Моту Тапу. Находится он неподалеку от острова Бора-Бора и славится своими девственными белыми песками и лагуной с бирюзовой водой. Когда-то на нем нашла убежище полинезийская королева Помаре IV.</p>
  <br>
  <p>Знаете ли вы, что слово "тату" произошло от таитянского тату? По мнению лингвистов, этим словом местные жители пользовались еще в 1500 году до нашей эры. Татуировки были непременным элементом украшения тела на Таити и символизировали ранг, богатство, принадлежность к определенному племени или группе семей.</p>
  <br>
  <p>На острове Рангироа, относящемся к архипелагу Туамоту, находится единственный в мире виноградник, растущий на коралловом атолле. Задумку выращивать виноград здесь воплотили в жизнь французы. И теперь на атолле производится единственная винная марка Ду Таити от Domaine Dominique Auroy Winery.</p>
  <br>
  <p>На островах нет ни ядовитых змей, ни ядовитых насекомых. Туристов могут беспокоить мошки или песчаные мухи, но их укусы не смертельны.</p>
  <br>
  <img src="../img/img161.jpg" class="Выборг">
  <br>
  <p>Белый цветок Тиаре Апетахи  растет исключительно на острове Раиатеа и только в одном месте — на горе Темехани. Цветок издает прекрасный аромат. Его носят мужчины и женщины в качестве украшения. Несмотря на многочисленные попытки ботаников пересадить его в других местах, цветок нигде не прижился.</p>
  <br>
  <p>А еще есть здесь католическая церковь, построенная из кораллов. В центре кораллового атолла Факарава архипелага Туамоту находится не только вторая по размерам лагуна, но и одна из старейших церквей Полинезии. Называется она Jean de la Croix. Вся внутренняя отделка церкви, поражающая своей красотой и роскошью, выполнена кораллами.</p>
  <br>
  <img src="../img/img162.jpg" class="Выборг">
<textarea id="vivod_koments">
     <?php mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
     $komen = mysqli_query($con, "SELECT * FROM comends ORDER BY id") ?>
     <?php while($kom = mysqli_fetch_assoc($komen)) { ?>

<?= $kom[`name`] ?>: 
    <?= $kom[`message`] ?>

     <?php } ?>
    </textarea>
</p>
</div>
</article>
</body>
</html>