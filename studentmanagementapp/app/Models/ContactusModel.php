<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactusModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=["firstname","lastname","email","phone","message"];
    protected $table="contacts";
}
