<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label', 'description',
    ];

    public function logs()
    {
        return $this->hasMany('App\Models\Log');
    }
}
