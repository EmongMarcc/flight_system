<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flightoneways extends Model
{
    use HasFactory;
    protected $casts = [
  'depart_info' => 'array',
  'general_info' => 'array',
  'fullname' => 'array',
  'layover_depart' => 'array',
  'layover_namedepart' => 'array',
];
  protected $fillable = ['pnr_number','booking_ref','trip_id','general_info','depart_info','fullname','layover_depart','layover_namedepart','booking_status'];

}
