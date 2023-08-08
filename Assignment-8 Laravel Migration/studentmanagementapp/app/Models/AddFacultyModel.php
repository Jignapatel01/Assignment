<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddFacultyModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=["name","photo","college_id","department_id","subject","phone","age","address"];
    protected $table='addfaculties';
}
