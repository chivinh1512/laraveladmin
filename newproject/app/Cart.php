<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Cart extends Model
{
    protected $table = 'shoppingcart';
    protected $fillable = ['identifier', 'instance','content'];
}
