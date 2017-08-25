<?php

namespace App\Models;

use App\Models\Traits\UserMethods;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use UserMethods;
    
    const CREATED_AT = 'dateCreated';
    const UPDATED_AT = 'dateUpdated';
    
    protected $guarded = [];
}
