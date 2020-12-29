<?php

namespace App\Scopes;
use App\Scopes\TenantScope;
use App\Tenant\TenantManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait TenantModels{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new TenantScope());

        static::creating(function(Model $model){
            $tenantManager = app(TenantManager::class);
            if($tenantManager->getTenant()){
                $accountId = $tenantManager->getTenant()->id;
                $model->account_id = $accountId;
            }
        });
    }
}
