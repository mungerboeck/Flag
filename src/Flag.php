<?php

namespace Tuider\Flags;

/**
 * Class Flag
 * Class representing a single Flag with specific properties
 */
abstract class Flag
{
    private $bezeichnung;
    private $farbe;

    /**
     * Flag constructor.
     * @param string $bezeichnung
     * @param string $farbe
     */
    public function __construct(string $bezeichnung, string $farbe)
    {
        $this->bezeichnung = $bezeichnung;
        $this->farbe = $farbe;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getBezeichnung() . " " . $this->getFarbe();
    }

    /**
     * @return string
     */
    public function getBezeichnung(): string
    {
        return $this->bezeichnung;
    }

    /**
     * @return string
     */
    public function getFarbe(): string
    {
        return $this->farbe;
    }
}