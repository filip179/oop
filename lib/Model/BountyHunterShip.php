<?php

namespace Model;

class BountyHunterShip extends AbstractShip
{
    use SettableJediFactorTrait;

    /**
     * @return string
     */
    public function getType()
    {
        return 'Bounty Hunter';
    }

    /**
     * @return bool
     */
    public function isFunctional()
    {
        return true;
    }
}
