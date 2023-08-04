<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmployeeID';
    public $timestamps = false;
    protected $fillable = [
        'EmployeeID','Name','Address','Salary'
    ];
}
