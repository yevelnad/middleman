<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "transaction_tags";
    protected $fillable = ["name"];

    public function transaction()
    {
      return $this->belongsTo('App\Model\Transaction');
    }
}
