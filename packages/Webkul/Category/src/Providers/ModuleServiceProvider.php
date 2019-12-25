<?php

namespace Webkul\Category\Providers;

use Konekt\Concord\BaseModuleServiceProvider;
use Webkul\Category\Models\Category;
use Webkul\Category\Models\CategoryTranslation;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Category::class,
        CategoryTranslation::class,
    ];
}
