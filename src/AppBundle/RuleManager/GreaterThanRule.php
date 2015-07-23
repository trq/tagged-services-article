<?php

namespace AppBundle\RuleManager;

class GreaterThanRule implements Rule
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function apply($value)
    {
        return $value > 4000;
    }
}