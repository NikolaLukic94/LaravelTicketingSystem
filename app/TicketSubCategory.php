<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketSubCategory extends Model
{
    protected $fillable = [ 'name' ];

    public static function createFromRequest($request)
    {
        self::create([
            'name' =>  $request->name
        ]);
    }
}
