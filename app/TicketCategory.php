<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketCategory extends Model
{
    protected $fillable = [ 'name' ];

    public static function createFromRequest($request)
    {
        self::create([
            'name' =>  $request->name
        ]);
    }

    public static  function updateFromRequest($request, $id) 
    {
        $ticket_category = TicketCategory::findOrFail($id);
            
        $ticket_category->name = $request->name;  
            
        return $ticket_category->save();  
    }  

    public function getTicketCategory($category_name) 
    {
    	
    }
}
