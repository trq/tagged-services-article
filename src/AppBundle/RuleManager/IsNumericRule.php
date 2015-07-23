<?php

namespace AppBundle\RuleManager;

class IsNumericRule implements Rule
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function apply($value)
    {
        return is_int($value);
    }
}