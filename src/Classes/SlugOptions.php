<?php

namespace Rinvex\Subscriptions\Classes;

use Spatie\Sluggable\SlugOptions as BaseSlugOptions; 

class SlugOptions extends BaseSlugOptions
{
    public $slugPostfix;
    
    public function usingPostfix(string $postfix)
    {
        $this->slugPostfix = $postfix;
        return $this;
    }
}