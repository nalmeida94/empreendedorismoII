<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Coment extends Model
{
    
    protected $fillable = [
        'content', 'user_id', 'title',
    ];
    
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s, d/m/Y');
    }
    
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s, d/m/Y');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
