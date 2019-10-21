<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = [ 'name',
                            'user_id' ];

    /**
     * Get the tickets with the label.
     */
    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public static function createFromRequest($request)
    {   
        return $new_label = self::create([
            'name' =>  $request->name,
            'order' =>  $request->order    
        ]);
    }   

    public static  function updateFromRequest($request, $id) 
    {
        $label = Label::findOrFail($id);
          	
          	$label->name =    $request->name;
         	$label->order =     $request->order;   
        	
        return $label->save();  
    }     
}
