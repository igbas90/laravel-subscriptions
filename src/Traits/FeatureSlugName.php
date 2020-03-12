<?php


namespace Rinvex\Subscriptions\Traits;


trait FeatureSlugName
{
    public function featureSlugByName($name)
    {
        $origin = \Str::slug($name, "-");
        $total = $this->plan_id
            ? $origin . "-" . $this->plan_id
            : $origin;
        return $total;
    }
}
