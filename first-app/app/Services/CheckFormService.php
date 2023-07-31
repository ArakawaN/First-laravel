<?php

namespace App\Services;

class CheckFormService
{
    public static function checkGender($contact)
    {
        if ($contact->gender === 0) {
            $gender = '男性';
        } else {
            $gender = '女性';
        }

        return $gender;
    }

    public static function checkAge($contact)
    {

        if ($contact->age === 1) {
            $age = '10代';
        }
        if ($contact->age === 2) {
            $age = '20代';
        }
        if ($contact->age === 3) {
            $age = '30代';
        }
        if ($contact->age === 4) {
            $age = '40代';
        }
        if ($contact->age === 5) {
            $age = '50代';
        }
        if ($contact->age === 6) {
            $age = '60歳以上';
        }

        return $age;
    }
}
