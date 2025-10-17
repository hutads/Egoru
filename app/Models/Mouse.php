<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mouse extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'mice';
    protected $guarded = [];
    protected $fillable = ['name', 'yest', 'count'];
}
