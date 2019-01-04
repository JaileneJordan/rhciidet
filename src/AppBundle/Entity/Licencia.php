<?php

namespace AppBundle\Entity;

/**
 * Licencia
 */
class Licencia
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
    private $activo;

    /**
     * Generates the magic method
     */
    public function __toString(){
        // para ver el nombre de licencia en un select
        return $this->nombreLic;
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
     * @return Licencia
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
     * Set activo
     *
     * @param string $activo
     *
     * @return Licencia
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return string
     */
    public function getActivo()
    {
        return $this->activo;
    }
    /**
     * @var string
     */
    private $nombreLic;


    /**
     * Set nombreLic
     *
     * @param string $nombreLic
     *
     * @return Licencia
     */
    public function setNombreLic($nombreLic)
    {
        $this->nombreLic = $nombreLic;

        return $this;
    }

    /**
     * Get nombreLic
     *
     * @return string
     */
    public function getNombreLic()
    {
        return $this->nombreLic;
    }
}
