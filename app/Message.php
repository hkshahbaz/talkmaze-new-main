<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\SyncsWithFirebase;

class Message extends Model
{
    use SyncsWithFirebase;

    protected $table = "messages";

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
