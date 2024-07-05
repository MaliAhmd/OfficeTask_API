<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// class demouser extends Model
// {
//     use HasFactory;
// }
class demouser extends Authenticatable
{
    protected $table = 'demousers'; // Specify the custom table name

    protected $fillable = [
        'userid', 'password', // Add other fields as necessary
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Assuming 'username' is the login field
    public function getAuthIdentifierName()
    {
        return 'userid';
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}
