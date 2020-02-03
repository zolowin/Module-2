<?php

namespace App;

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
//    use Notifiable;

    protected $fillable = ['title', 'content', 'due_date'];

//    public function category(){
//        return $this->belongsTo("App\Category");
//    }
}
