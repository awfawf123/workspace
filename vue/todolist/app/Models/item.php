<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    protected $casts =[
        'completed' =>'boolean'
    ];

    protected $dates = [
        'completed_at',
    ];
    // API로 JSON을 파싱할 때 데이터를 timezone에 맞추기 위한 설정
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
