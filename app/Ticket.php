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

    public function creator() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category() 
    {
        return $this->belongsTo(TicketCategory::class, 'category_id');
    }    

    public function subCategory() 
    {
        return $this->belongsTo(TicketSubCategory::class, 'category_id');
    }    


    public function imageCount() {

        return $this->hasMany(TicketImage::class)->count();
    }

    protected $fillable = [ 'title',
                            'importance',
                            'description',
                            'category_id',
                            'sub_category_id',
                            'user_id',
                            'due' ];

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

    public function getDueTodayTickets($today) {
        return $tickets = Ticket::where('due', $today)->get();
    }    

    public function solve($ticket_id) {
    //    return Ticket::findOrFail()
    }  

    public function getTicketsWithSameStatus($status) {
        return $tickets = Ticket::where('status',$status)->get();
    }   

    public function countTicketsWithSameStatus($status) {
        return $ticket_count = Ticket::where('status', $status)->count();
    }     

    public function getLatestTicket($field_for_sorting) {
        return DB::table('tickets')->latest($field_for_sorting)->first();
    }     

    public function commentsCount() {

        return $this->hasMany(Comment::class)->count();
    }    

}
