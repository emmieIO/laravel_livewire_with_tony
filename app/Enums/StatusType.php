<?php

namespace App\Enums;


enum StatusType : string
{
    const pending =   'pending';
    const active =    'active';
    const in_progress = 'in progress';
    const completed = 'completed';
    const cancelled = 'cancelled';
    

}