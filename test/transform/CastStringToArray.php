<?php

namespace phalconer\test\transform;

trait CastStringToArray
{
    /**
     * @Transform /^\[(.*)\]$/
     */
    public function castStringToArray($string)
    {
        return array_map('trim', explode(',', $string));
    }
}
