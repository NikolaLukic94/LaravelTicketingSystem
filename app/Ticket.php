<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [ 'name' ];

    public static function createFromRequest($request)
    {
        self::create([
            'title' =>  $request->title,
            'importance' =>  $request->importance,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'ticket_image_id' => $request->ticket_image_id,
            'user_id' => $request->Auth::user()->id     
        ]);
    }
}
