<?php

namespace AppBundle\RuleManager;

class LessThanRule implements Rule
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function apply($value)
    {
        return $value < 20000;
    }
}