<?php

namespace App\Repositories;

use AuraIsHere\LaravelMultiTenant\Traits\TenantScopedModelTrait;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;
use App\Repositories\Scopes\TenantTrait;

class ItemRepository extends BaseRepository implements CacheableInterface {

    use TenantScopedModelTrait;
    use CacheableRepository;

    use TenantTrait;
    
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Item";
    }
}