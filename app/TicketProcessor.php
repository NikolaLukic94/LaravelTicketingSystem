<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketProcessor extends Model
{
    /**
     * Get the ticket to which this processor is assigned to.
     */
    public function user()
    {
        return $this->belongsTo(Ticket::class);
    }
}
