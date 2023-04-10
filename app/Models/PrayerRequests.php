<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrayerRequests extends Model
{
    use HasFactory;
    protected $table = 'prayer_requests';
    protected $fillable = ['user_id', 'prayer', 'ip', 'device_type', 'platform', 'platform_version', 'browser', 'browser_version', 'counter'];
    
}
