<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;


protected $fillable = ["name","description"];

protected static function boot(){
    parent::boot();
    self::creating(function ($table){
        if (!app()->runningInConsole()){
            $table->user_id = auth()->id();
        }
    });
}

public funtion user(){
    return $this->belongsTo(User::class);
}




}