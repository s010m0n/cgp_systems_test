<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'email',
    ];

    public function company()
    {
        return $this->belongsToMany(Company::class, 'company_client');
    }
}
