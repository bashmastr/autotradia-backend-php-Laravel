<?php

namespace App\Models;

use App\Notifications\VerifyEmail;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\PasswordResetNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{

    
    use \Reportable\Traits\Reportable;
    
    use Notifiable,HasRoles,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','provider','provider_id','is_dealer'
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

    public function ads()
    {
      return $this->hasMany(Ad::class);
    }

    public function wishlists(){
        return $this->hasMany(WishList::class);
    }

    public function userDetail(){
       return $this->hasOne(UserDetail::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function purchases(){
        return $this->hasMany(Purchase::class);
    }
    public function sendPasswordResetNotification($token)
    {
       $this->notify(new PasswordResetNotification($token));
    }
    
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }
    public function eventcomments(){
        return $this->hasMany(EventComment::class);
    }
    public function newscomments(){
        return $this->hasMany(NewsComment::class);
    }
}
