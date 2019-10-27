<?php

namespace App;

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

}
