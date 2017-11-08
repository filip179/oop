<?php

namespace Model;

class RebelShip extends AbstractShip
{
    /**
     * @return string
     */
    public function getFavoriteJedi()
    {
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'Rebel';
    }

    /**
     * @return bool
     */
    public function isFunctional()
    {
        return true;
    }

    /**
     * @param bool $useShortFormat
     *
     * @return string
     */
    public function getNameAndSpecs($useShortFormat = false)
    {
        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Jedi)';

        return $val;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return rand(10, 30);
    }
}
