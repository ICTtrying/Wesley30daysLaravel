<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job__listing';
    protected $fillable = ['title', 'salary'];
}
