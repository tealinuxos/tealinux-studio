<?php

namespace App;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','username'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    // profile

    public function profile()
    {
      return $this->hasOne('App\Profile', 'user_id');
    }
    // user has many posts
    public function posts()
    {
      return $this->hasMany('App\Posts','author_id');
    }
    // user has many tasks
    public function tasks()
    {
      return $this->hasMany('App\Tasks','user_id');
    }
    // user has many comments
    public function comments()
    {
      return $this->hasMany('App\Comments','from_user');
    }
    public function can_make_task()
    {
      $role = $this->role;
      if($role == 'admin' || $role == 'pengguna')
      {
        return true;
      }
      return false;
    }
    public function is_admin()
    {
      $role = $this->role;
      if($role == 'admin')
      {
        return true;
      }
      return false;
    }

    public function is_pengguna()
    {
      $role = $this->role;
      if($role == 'pengguna')
      {
        return true;
      }
      return false;
    }
    public function my_id()
    {
      $id = $this->id;
      return $id;
    }
    public function my_username()
    {
      $username = $this->username;
      return $username;
    }

}
