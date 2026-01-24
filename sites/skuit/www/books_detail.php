<?php
$jsonFile = __DIR__ . '/books_storage.json';
$studentName = "Студент Студентыч";

if (!file_exists($jsonFile)) {
    die("Файл books_storage.json не найден!");
}

$books = json_decode(file_get_contents($jsonFile), true);
if ($books === null) {
    die("Ошибка при чтении JSON: " . json_last_error_msg());
}

if (!isset($_GET['id'])) {
    die("Не указан ID книги!");
}

$bookId = (int)$_GET['id'];

$book = null;
foreach ($BOOKS)