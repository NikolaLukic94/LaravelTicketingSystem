<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\TicketImage;

class Ticket extends Model
{
    public function images() {

        return $this->hasMany(TicketImage::class)->latest();
    }

    /**
     * Get the assigne associated with the ticket.
     */
    public function ticketProcessor()
    {
        return $this->hasOne(TicketProcessor::class);
    }

    public function imageCount() {

        return $this->hasMany(TicketImage::class)->count();
    }

    protected $fillable = [ 'title',
                            'importance',
                            'description',
                            'category_id',
                            'sub_category_id',
                            'user_id' ];

    public static function createFromRequest($request)
    {   
        $imageName = null;
        $auth_id = Auth::user()->id;

        $new_ticket = self::create([
            'title' =>  $request->title,
            'importance' =>  $request->importance,
            'description' => $request->description,
            'category_id' => $request->subcategory,
            'sub_category_id' => $request->subcategory,
            'user_id' => $auth_id    
        ]);

        TicketImage::createFromRequest($new_ticket->id, $request);

    }
}
