<?php

namespace AppBundle\Entity;

/**
 * Subdireccion
 */
class Subdireccion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $subdirector;

    /**
     * Generates the magic method
     *
     */
    public function __toString(){
        // para ver el nombre de subdireccion en un select
        return $this->nombreSubd;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Subdireccion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set subdirector
     *
     * @param string $subdirector
     *
     * @return Subdireccion
     */
    public function setSubdirector($subdirector)
    {
        $this->subdirector = $subdirector;

        return $this;
    }

    /**
     * Get subdirector
     *
     * @return string
     */
    public function getSubdirector()
    {
        return $this->subdirector;
    }
    /**
     * @var string
     */
    private $nombreSubd;


    /**
     * Set nombreSubd
     *
     * @param string $nombreSubd
     *
     * @return Subdireccion
     */
    public function setNombreSubd($nombreSubd)
    {
        $this->nombreSubd = $nombreSubd;

        return $this;
    }

    /**
     * Get nombreSubd
     *
     * @return string
     */
    public function getNombreSubd()
    {
        return $this->nombreSubd;
    }
}
