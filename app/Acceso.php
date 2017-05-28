<?php

namespace Acceso;

use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    protected $table = 'accesos';

    protected $fillable = [
        'name', 'ip', 'fecha', 'estado',
    ]; 
}
