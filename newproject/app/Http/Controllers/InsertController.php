<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InsertController extends Controller
{
    public function insert(){
        DB::insert('insert into category(name) values (?)',['banh me']);
        return 'ok';
    }
}
