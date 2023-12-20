<?php

namespace App\Enums;


enum StatusType : string
{
    case pending =   'pending';
    case active =    'active';
    case in_progress = 'inprogress';
    case completed = 'completed';
    case cancelled = 'cancelled';
    

}