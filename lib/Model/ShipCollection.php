<?php

namespace Model;

class ShipCollection implements \ArrayAccess, \IteratorAggregate
{
    /**
     * @var AbstractShip[]
     */
    private $ships;

    /**
     * ShipCollection constructor.
     *
     * @param array $ships
     */
    public function __construct(array $ships)
    {
        $this->ships = $ships;
    }

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->ships);
    }

    /**
     * @param int $offset
     *
     * @return AbstractShip
     */
    public function offsetGet($offset)
    {
        return $this->ships[$offset];
    }

    /**
     * @param int $offset
     * @param AbstractShip $value
     */
    public function offsetSet($offset, $value)
    {
        $this->ships[$offset] = $value;
    }

    /**
     * @param int $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->ships[$offset]);
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ships);
    }

    public function removeAllBrokenShips()
    {
        foreach ($this->ships as $key => $ship) {
            if (!$ship->isFunctional()) {
                unset($this->ships[$key]);
            }
        }
    }
}
