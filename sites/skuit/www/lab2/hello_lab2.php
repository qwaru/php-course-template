<?
$name = 'Григорьев Егор Николаевич';
$age = 36;
?>
<title><?= $name?></title>
<?for ($age; $age > 0; $age-- ):?>
    <p> <?= $age?> Статичный текст </p>
<?endfor;?>