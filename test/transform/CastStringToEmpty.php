<?php

namespace test\transform;

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
