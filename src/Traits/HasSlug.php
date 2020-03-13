<?php


namespace Rinvex\Subscriptions\Traits;

use Illuminate\Support\Str;
use Rinvex\Support\Traits\HasSlug as BaseHasSlug;

trait HasSlug
{
    use BaseHasSlug;

    public function generateNonUniqueSlug(): string
    {
        $slugField = $this->slugOptions->slugField;

        if ($this->hasCustomSlugBeenUsed() && ! empty($this->$slugField)) {
            return $this->$slugField;
        }

        $slugName = Str::slug($this->getSlugSourceString(), $this->slugOptions->slugSeparator, $this->slugOptions->slugLanguage);

        return !empty($this->slugOptions->slugPostfix)
            ? $slugName . $this->slugOptions->slugSeparator . $this->slugOptions->slugPostfix
            : $slugName;
    }
}
