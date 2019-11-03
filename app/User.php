<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dispatchesEvents = [
       //
        'created' => Events\UserRegistered::class,

    ];

    /**
     * Get the comments for the blog post.
     */
    public function assignedTickets()
    {
        return $this->hasMany('App\Ticket','assignee_id');
    }

    public function assignedTicketsCount()
    {
        return $this->hasMany('App\Ticket','assignee_id')->count();
    }

    public function numOfTicketsAssigned() 
    {
        return $this->hasMany(Ticket::class)->count();
    }

    public function participatingInTickets() 
    {
        
    }

    public function solvedTotalTickets() 
    {
        
    }

    public function participatingInNumOfTickets() 
    {

    }

    public function countOfTicketUserIsWorkingOn() 
    {

    }

    public function getTicketsICreatedNum() 
    {

    } 

    public function getTicketsICreated() 
    {

    }    
}
