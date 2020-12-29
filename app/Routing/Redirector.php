<?php

namespace App\Routing;

use App\Tenant\TenantManager;
use Illuminate\Routing\Redirector as RedirectorLaravel;

class Rediretor extends RedirectorLaravel{
    public function routeTenant($name, $params = [], $status = 302, $headers = []){

        $tenantManager = app(TenantManager::class);
        $tenantParam = $tenantManager->routeParam();

        return $this->route($name, $params + [
                config('tenant.route_param') => $tenantParam
            ], $status, $headers);
    }
}
