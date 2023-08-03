<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $table='descriptions';
    protected $fillable=['title', 'subtitle'];

    // protected function data(): Attribute{
    //     return attribute::make(
    //         get: fn ($value) =>json_decode($value,true),
    //         set: fn ($value) =>json_encode($value),
    //     );
    // }
}
