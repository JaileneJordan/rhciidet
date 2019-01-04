<?php

namespace AppBundle\Entity;

/**
 * Semestre
 */
class Semestre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $semestre;

    /**
     * @var integer
     */
    private $year;

    /**
     * @var string
     */
    private $activo;


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
     * Set semestre
     *
     * @param string $semestre
     *
     * @return Semestre
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return string
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Semestre
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set activo
     *
     * @param string $activo
     *
     * @return Semestre
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
}
