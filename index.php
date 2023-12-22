<?php

require_once 'vendor/autoload.php';

use App\User;
use App\UserService;

$user1 = new User('issac_asimov', 'password', new DateTime('2000-08-28'));
$user2 = new User('judas_judasovich', 'password2', new DateTime('2001-11-18'));
$user3 = new User('piter_parker', 'password3', new DateTime('2005-03-21'));

$userService = new UserService();

$users = [$user1, $user2, $user3];

$sortedByUsernameAsc = $userService->sortByUsername($users);
echo "Сортировка по возрастанию:\n";
foreach ($sortedByUsernameAsc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
echo "\n";

$sortedByUsernameDesc = $userService->sortByUsername($users, false);
echo "Сортировка по убыванию:\n";
foreach ($sortedByUsernameDesc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
echo "\n";

$sortedByBirthdayAsc = $userService->sortByBirthday($users);
echo "Сортировка дня рождения по возрастанию:\n";
foreach ($sortedByBirthdayAsc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
echo "\n";

$sortedByBirthdayDesc = $userService->sortByBirthday($users, false);
echo "Сортировка дня рождения по убыванию:\n";
foreach ($sortedByBirthdayDesc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
