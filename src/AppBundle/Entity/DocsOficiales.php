<?php

namespace AppBundle\Entity;

/**
 * DocsOficiales
 */
class DocsOficiales
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
        // para ver el nombre de documento oficial en un select
        return $this->nombreDoc;
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
     * @return DocsOficiales
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
     * @return DocsOficiales
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
    private $nombreDoc;


    /**
     * Set nombreDoc
     *
     * @param string $nombreDoc
     *
     * @return DocsOficiales
     */
    public function setNombreDoc($nombreDoc)
    {
        $this->nombreDoc = $nombreDoc;

        return $this;
    }

    /**
     * Get nombreDoc
     *
     * @return string
     */
    public function getNombreDoc()
    {
        return $this->nombreDoc;
    }
}
