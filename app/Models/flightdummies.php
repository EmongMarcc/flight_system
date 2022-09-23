<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flightdummies extends Model
{
    use HasFactory;
    protected $casts = [
  'depart_info' => 'array',
  'arrive_info' => 'array',
  'general_info' => 'array',
  'fullname' => 'array',
  'layover_depart' => 'array',
  'layover_arrive' => 'array',
  'layover_namedepart' => 'array',
  'layover_namearrive' => 'array',
];
  protected $fillable = ['pnr_number','booking_ref','trip_id','general_info','arrive_info','depart_info','fullname','layover_depart','layover_arrive','layover_namedepart','layover_namearrive','booking_status'];

}
