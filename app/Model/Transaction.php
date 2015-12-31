<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['name','description','reward','recipient'];


    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function tag()
    {
      return $this->hasOne('App\Model\Tag', 'transaction_id');
    }
}
