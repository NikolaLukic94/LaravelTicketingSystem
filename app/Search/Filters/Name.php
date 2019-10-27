<?php

namespace App\UserSearch\Filters;

class Name implements Filter
{
    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */	
    public static function apply($builder, $value)
    {
        return $builder->where('name', $value);
    }
}