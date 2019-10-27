<?php

namespace App\Search;

use Illuminate\Http\Request;
use App\Ticket;

class UserSearch

{
    public static function apply(Request $filters)
    {
        $query = 
            static::applyDecoratorsFromRequest(
                $filters, (new Ticket)->newQuery()
            );

        return static::getResults($query);
    }
    
    private static function applyDecoratorsFromRequest(Request $request, Builder $query)
    {
        foreach ($request->all() as $filterName => $value) {

            $decorator = static::createFilterDecorator($filterName);

            if (static::isValidDecorator($decorator)) {
                $query = $decorator::apply($query, $value);
            }

        }
        return $query;
    }
    
    private static function createFilterDecorator($name)
    {
        return return __NAMESPACE__ . '\\Filters\\' . 
            str_replace(' ', '', 
                ucwords(str_replace('_', ' ', $name)));
    }
    
    private static function isValidDecorator($decorator)
    {
        return class_exists($decorator);
    }

    private static function getResults(Builder $query)
    {
        return $query->get();
    }

}