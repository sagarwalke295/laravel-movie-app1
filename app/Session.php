<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function cinema()
    {
        return $this->belongsTo('App\Cinema');
    }

    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    // Calculated Attributes
    public function getDateAttribute()
    {
        return date('l, j F Y', strtotime($this->scheduled_at));
    }

    public function getTimeAttribute()
    {
        return date('g:s A', strtotime($this->scheduled_at));
    }
}
