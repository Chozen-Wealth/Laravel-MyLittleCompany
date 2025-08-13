<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = "empolyes";
    protected $fillable = ["nom", "prenom", "tel", "email", "post", "role", "salaire"];
}
