<?php

namespace App\Models;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable =
    [
        'name' , 'nationalid' , 'address' ,'phone' ,'user_id'
    ];
    public function sale()
    {
        return $this->hasMany(Sale::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}

