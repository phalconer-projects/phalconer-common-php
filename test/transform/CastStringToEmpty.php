<?php

namespace phalconer\test\transform;

trait CastStringToEmpty
{
    /**
     * @Transform /^\-\-\-$/
     */
    public function castStringToEmpty($string)
    {
        return "";
    }
}
