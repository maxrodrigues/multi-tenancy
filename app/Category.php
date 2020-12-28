<?php

namespace App;

use App\Scopes\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use TenantModels;
    protected $fillable = ['name'];

}
