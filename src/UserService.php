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
            } else {
                return strcmp($b->username, $a->username);
            }
        });

        return $users;
    }

    public function sortByBirthday(array $users, bool $ascending = true): array
    {
        usort($users, function ($a, $b) use ($ascending) {
            if ($ascending) {
                return $a->birthday <=> $b->birthday;
            } else {
                return $b->birthday <=> $a->birthday;
            }
        });

        return $users;
    }
}
