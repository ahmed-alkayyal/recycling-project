<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Waste;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'birth_date', 'phone', 'password','addres');

    public function wastes()
    {
        return $this->hasMany(Waste::class);
    }

    protected $hidden = [
        'password', 'api_token'
    ];
}
