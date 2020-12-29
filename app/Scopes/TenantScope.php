<?php
namespace App\Scopes;

use App\Tenant\TenantManager;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class TenantScope implements Scope{

    public function apply(Builder $builder, Model $model)
    {
        $tenantManager = app(TenantManager::class);
        if($tenantManager->getTenant()){
            $accountId = $tenantManager->getTenant()->id;
            $builder->where('account_id', $accountId);
        }
    }
}
