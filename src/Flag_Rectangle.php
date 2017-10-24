<?php

namespace Tuider\Flags;

class Flag_Rectangle extends Flag implements FlagInterface {
    private $height;
    private $length;

    /**
     * Flag_Rectangle constructor.
     * @param string $bezeichnung
     * @param string $farbe
     * @param int $height
     * @param int $length
     */
    public function __construct(string $bezeichnung, string $farbe, int $height, int $length)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->height = $height;
        $this->length = $length;
    }

    /**
     * @return float
     */
    public function getArea():float{
        return $this->height*$this->length;
    }
}