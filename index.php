<?php
if(!function_exists('my_mb_ucfirst')) {
    function my_mb_ucfirst($str) {
        $fc = mb_strtoupper(mb_substr($str, 0, 1));
        return $fc.mb_substr($str, 1);
    }
}

echo "Ввведи имя:\n";
$first_name = trim(fgets(STDIN));
$first_name = my_mb_ucfirst($first_name);
echo "\n";

echo "Ввведи фамилию:\n";
$last_name = trim(fgets(STDIN));
$last_name = my_mb_ucfirst($last_name);
echo "\n";

echo "Ввведи отчетсво:\n";
$patronymic = trim(fgets(STDIN));
$patronymic = my_mb_ucfirst($patronymic);
echo "\n";

$fullname = $last_name . ' ' . $first_name . ' ' . $patronymic;
echo 'Полное имя: ' . $fullname . "\n";

$surnameAndInitials = $last_name . ' ' . mb_substr($first_name, 0, 1) . '.' . mb_substr($patronymic, 0, 1) . '.';
echo 'Фамилия и инициалы: ' . $surnameAndInitials . "\n";

$fio = mb_substr($last_name, 0, 1) . mb_substr($first_name, 0, 1) . mb_substr($patronymic, 0, 1);
echo 'Аббревиатура: ' . $fio . "\n";