<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Waste extends Model
{
    use HasFactory;
    protected $table = 'wastes';
    public $timestamps = true;
    protected $fillable = array('name', 'img', 'type', 'status', 'consent','description','price');

    public function WastesClient()
    {
        return $this->belongsTo(Client::class);
    }
}
