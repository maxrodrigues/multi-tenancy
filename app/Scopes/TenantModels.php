<?php

namespace App\Scopes;
use App\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait TenantModels{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new TenantScope());

        static::creating(function(Model $model){
            $account_id = Auth::user()->account_id;
            $model->account_id = $account_id;
        });
    }
}
