<?php

namespace App;

use App\Scopes\TenantGlobalScope;
use App\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use TenantGlobalScope;
    protected $fillable = ['name'];
}
