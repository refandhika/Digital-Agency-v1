<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $fillable = ['uuid', 'name', 'description', 'icon', 'image'];

    public static function boot(){
        parent::boot();
        static::creating(function($model){
            $model->uuid = Str::uuid();
        });
    }
}
