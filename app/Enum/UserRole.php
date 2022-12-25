<?php

namespace App\Enum;

enum UserRole: int
{
    case SuperAdmin = 1;
    case Admin = 2;
    case Customer = 3;
}