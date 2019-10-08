<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketImage extends Model
{
    public function ticket() 
    {
        return $this->belongsTo(Ticket::class);
    }

    protected $fillable = [ 'user_id','link' ];

    public static function createFromRequest($ticket_id, $request)
    {	
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);

        self::create([
            'ticket_id'=>$ticket_id,
            'link' =>$imageName
        ]);

    }
}
