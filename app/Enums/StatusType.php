<?php

namespace App\Enums;


enum StatusType : string
{
    case pending =   'pending';
    case active =    'active';
    case in_progress = 'in progress';
    case completed = 'completed';
    case cancelled = 'cancelled';
    

}