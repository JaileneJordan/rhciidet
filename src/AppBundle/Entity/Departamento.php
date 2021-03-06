<?php

namespace AppBundle\Entity;

/**
 * Departamento
 */
class Departamento
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
    private $jefe;

    /**
     * @var \AppBundle\Entity\Subdireccion
     */
    private $idSubdireccion;

    /**
     * Generates the magic method
     */
    public function __toString(){
        // para ver el nombre de departamento en un select
        return $this->nombreDep;
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
     * @return Departamento
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
     * Set jefe
     *
     * @param string $jefe
     *
     * @return Departamento
     */
    public function setJefe($jefe)
    {
        $this->jefe = $jefe;

        return $this;
    }

    /**
     * Get jefe
     *
     * @return string
     */
    public function getJefe()
    {
        return $this->jefe;
    }

    /**
     * Set idSubdireccion
     *
     * @param \AppBundle\Entity\Subdireccion $idSubdireccion
     *
     * @return Departamento
     */
    public function setIdSubdireccion(\AppBundle\Entity\Subdireccion $idSubdireccion = null)
    {
        $this->idSubdireccion = $idSubdireccion;

        return $this;
    }

    /**
     * Get idSubdireccion
     *
     * @return \AppBundle\Entity\Subdireccion
     */
    public function getIdSubdireccion()
    {
        return $this->idSubdireccion;
    }
    /**
     * @var string
     */
    private $nombreDep;


    /**
     * Set nombreDep
     *
     * @param string $nombreDep
     *
     * @return Departamento
     */
    public function setNombreDep($nombreDep)
    {
        $this->nombreDep = $nombreDep;

        return $this;
    }

    /**
     * Get nombreDep
     *
     * @return string
     */
    public function getNombreDep()
    {
        return $this->nombreDep;
    }
}
