<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $table='users';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=true;
}
