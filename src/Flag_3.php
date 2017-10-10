<?php

namespace Tuider\Flags;

class Flag_3 extends Flag implements FlagInterface {
    private $base;
    private $height;

    /**
     * Flag_3 constructor.
     * @param string $bezeichnung
     * @param string $farbe
     * @param int $base
     * @param int $height
     */
    public function __construct(string $bezeichnung, string $farbe, int $base, int $height)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->base = $base;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getArea():float{
        return 0.5*$this->base*$this->height;
    }
}