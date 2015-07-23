<?php

namespace AppBundle\RuleManager;

interface Rule
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function apply($value);
}