<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apps extends Model
{

  // returns the instance of the user who is pengguna of that task
  public function pensubmit()
  {
    return $this->belongsTo('App\User','user_id');
  }
}
