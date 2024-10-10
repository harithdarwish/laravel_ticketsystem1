<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [

        "name",
        "email",
        "phone",
        "level",
        "status",
        "msg",
    ];

    //table for ticket
    protected $table = "ticket";

}
