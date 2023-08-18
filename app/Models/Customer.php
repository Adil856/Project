<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model

{
    use SoftDeletes;
    protected $table = "customer";
    protected $primaryKey = "customer_id";
    protected $fillable = ['name','email'];

    // Mutator!!
    public function setNameAttribute($value)
    {
        $this->attributes ['name'] = ucwords($value);
    }
    public function setEmailAttribute($value)
    {
        $this->attributes ['email'] = ucwords($value);
    }

    // Accessor!
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    public function getEmailAttribute($value)
    {
        return ucfirst($value);
    }
    
}
