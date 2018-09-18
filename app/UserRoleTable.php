<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRoleTable extends Model
{
    protected $table = 'tbuserrole';
    public function users(){
        return $this->hasMany(User::class);
    }
}
