<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
  protected $fillable = ['list_aplikasi'];
  // returns the instance of the user who is pengguna of that task
  public function pengguna()
  {
    return $this->belongsTo('App\User','user_id');
  }
}
