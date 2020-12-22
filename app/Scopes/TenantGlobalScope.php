<?php

namespace App\Scopes;
use App\Scopes\TenantScope;

trait TenantGlobalScope{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new TenantScope());
    }
}
