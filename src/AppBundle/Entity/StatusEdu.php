<?php

namespace AppBundle\Entity;

/**
 * StatusEdu
 */
class StatusEdu
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
        // para ver el nombre de status educativo en un select
        return $this->nombreSe;
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
     * @return StatusEdu
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
     * @return StatusEdu
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
    private $nombreSe;


    /**
     * Set nombreSe
     *
     * @param string $nombreSe
     *
     * @return StatusEdu
     */
    public function setNombreSe($nombreSe)
    {
        $this->nombreSe = $nombreSe;

        return $this;
    }

    /**
     * Get nombreSe
     *
     * @return string
     */
    public function getNombreSe()
    {
        return $this->nombreSe;
    }
}
