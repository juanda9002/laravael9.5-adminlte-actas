<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FabricanteModel extends Model
{
    protected $table = "fabricante";
    protected $primarykey = "idFabricante";
    protected $filebale = ['nombreFabricante'];
    
   // use HasFactory;
}
