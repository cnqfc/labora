<?php

namespace App\Enums;

enum UserRole: string
{
    case Seeker = 'seeker';
    case CompanyAdmin = 'company_admin';
    case PlatformAdmin = 'platform_admin';
}
