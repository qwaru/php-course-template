<h1>🧙‍♂️ Подготовка хоббитов к путешествию</h1>

<?php
$allHobits = ["Фродо", "Сэм", "Мери", "Пиппин", "Бильбо", "Тук", "Любелия", "Рози", "Фатти Болджер", "Одо", "Фредегар"];


$partySize = rand(2,5);


shuffle($allHobits);
$party = array_slice($allHobits, 0, $partySize);


?>

<div> class='block'>
    В поход отправятся <?= $countParty?> хоббитов: <?= $names?><br>
</div>