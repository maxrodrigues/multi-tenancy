<?php

namespace App;

use App\Scopes\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use TenantModels;
    protected $fillable = ['name'];


    /*protected static function boot()
    {
        parent::boot();
        static::creating(function(Model $model){
            $account_id = Auth::user()->account_id;
            $model->account_id = $account_id;
        });
    }*/


}
