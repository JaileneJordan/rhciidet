<?php

namespace AppBundle\Entity;

/**
 * NivelEdu
 */
class NivelEdu
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
        // para ver el nombre de nivel educativo en un select
        return $this->nombreNe;
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
     * @return NivelEdu
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
     * @return NivelEdu
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
    private $nombreNe;


    /**
     * Set nombreNe
     *
     * @param string $nombreNe
     *
     * @return NivelEdu
     */
    public function setNombreNe($nombreNe)
    {
        $this->nombreNe = $nombreNe;

        return $this;
    }

    /**
     * Get nombreNe
     *
     * @return string
     */
    public function getNombreNe()
    {
        return $this->nombreNe;
    }
}
