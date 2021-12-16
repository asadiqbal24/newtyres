<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth; 
use Redirect;
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'uid','name', 'email','gender','tra_pin','term_condition_license','parent_id','username','password','email_token','verified'
    ];
    protected $hidden = ['password','remember_token','email_token','term_condition_license','verified'];

    public function roles(){
        return $this->belongsToMany(Role::class,'role_users');
    }
    public function hasAccess(array $permissions){
        foreach($this->roles as $role){
            if($role->hasAccess($permissions)){
                return true;
            }
        }
    }

}
