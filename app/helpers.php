<?php

if(!function_exists('routeTenant')){
    function routeTenant($name, $param = [], $absolute = true){
        /** @var TenantManager $tenantManager */
        $tenantManager = app(\App\Tenant\TenantManager::class);
        $tenantParam = $tenantManager->routeParam();

        return route($name, $param + [
            config('tenant.route_param') => $tenantParam
        ], $absolute);
    }
}

if(!function_exists('layoutTenant')){
    function layoutTenant(){
        /** @var TenantManager $tenantManager */
        $tenantManager = app(\App\Tenant\TenantManager::class);
        $isSubdomainExcept = $tenantManager->isSubdomainExcept();

        return !$isSubdomainExcept ? 'layouts.app' : 'layouts.admin';
    }
}
