<?php

namespace App;

use App\User;

class UserService
{
    public function sortByUsername(array $users, bool $ascending = true): array
    {
        usort($users, function ($a, $b) use ($ascending) {
            if ($ascending) {
                return strcmp($a->username, $b->username);
            }
        });

        return $users;
    }

    public function sortByBirthday(array $users, bool $ascending = true): array
    {
        usort($users, function ($a, $b) use ($ascending) {
            if ($ascending) {
                return $a->birthday <=> $b->birthday;
            }
        });

        return $users;
    }
}
