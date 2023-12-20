<?php

namespace App\Enums;

enum PriorityType : string
{
    case low = 'low';
    case normal = 'normal';
    case high = 'high';
}