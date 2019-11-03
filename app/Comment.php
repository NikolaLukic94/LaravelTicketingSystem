<?php

namespace App;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [ 'text',
                            'user_id',
                            'ticket_id' ];
    
    public function creator() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function createdForTicket() 
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }        

    public static function createFromRequest($request, $ticket_id)
    {   
        $auth_id = Auth::user()->id;

        return $new_comment = self::create([
            'user_id' =>  $request->title,
            'text' =>  $request->comment,
            'ticket_id' => $request->ticket_id 
        ]);

    }

}
