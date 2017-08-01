<?php

namespace ValueObjects\Util;

/**
 * Utility class for methods used all across the library
 * @package ValueObjects\Util
 */
class Util
{
    /**
     * Tells whether two objects are of the same class
     *
     * @param  object $object_a
     * @param  object $object_b
     * @return bool
     */
    public static function classEquals($object_a, $object_b)
    {
        return self::getClassAsString($object_a) === self::getClassAsString($object_b);
    }

    /**
     * Returns a classes fully qualified name space
     *
     * @param $object
     * @return string
     */
    public static function getClassAsString($object)
    {
        return \get_class($object);
    }
    
}
