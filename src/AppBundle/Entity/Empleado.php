<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Empleado
 */
class Empleado implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $claveEmpleado;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $aPaterno;

    /**
     * @var string
     */
    private $aMaterno;

    /**
     * @var string
     */
    private $rfc;

    /**
     * @var string
     */
    private $curp;

    /**
     * @var integer
     */
    private $nss;

    /**
     * @var string
     */
    private $ley;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var integer
     */
    private $numExt;

    /**
     * @var string
     */
    private $colonia;

    /**
     * @var integer
     */
    private $cp;

    /**
     * @var string
     */
    private $municipio;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var integer
     */
    private $telefono;

    /**
     * @var string
     */
    private $edoCivil;

    /**
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @var string
     */
    private $lugarNacimiento;

    /**
     * @var string
     */
    private $genero;

    /**
     * @var \DateTime
     */
    private $fechaIniGobSep;

    /**
     * @var \DateTime
     */
    private $fechaIniSep;

    /**
     * @var \DateTime
     */
    private $fechaIniTec;

    /**
     * @var \DateTime
     */
    private $fechaIniCiidet;

    /**
     * @var string
     */
    private $clavePresupuestal;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $interinato;

    /**
     * @var string
     */
    private $activo;

    /**
     * @var \AppBundle\Entity\Acceso
     */
    private $idAcceso;

    /**
     * @var \AppBundle\Entity\Departamento
     */
    private $idDepto;

    /**
     * @var \AppBundle\Entity\Categoria
     */
    private $idCategoria;

    /**
     * @var \AppBundle\Entity\Puesto
     */
    private $idPuesto;

    /**
     * Generates the magic method
     */
    public function __toString(){
        // para ver el nombre de empleado en un select
        return $this->nombre;
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
     * Set claveEmpleado
     *
     * @param string $claveEmpleado
     *
     * @return Empleado
     */
    public function setClaveEmpleado($claveEmpleado)
    {
        $this->claveEmpleado = $claveEmpleado;

        return $this;
    }

    /**
     * Get claveEmpleado
     *
     * @return string
     */
    public function getClaveEmpleado()
    {
        return $this->claveEmpleado;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empleado
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
     * Set aPaterno
     *
     * @param string $aPaterno
     *
     * @return Empleado
     */
    public function setAPaterno($aPaterno)
    {
        $this->aPaterno = $aPaterno;

        return $this;
    }

    /**
     * Get aPaterno
     *
     * @return string
     */
    public function getAPaterno()
    {
        return $this->aPaterno;
    }

    /**
     * Set aMaterno
     *
     * @param string $aMaterno
     *
     * @return Empleado
     */
    public function setAMaterno($aMaterno)
    {
        $this->aMaterno = $aMaterno;

        return $this;
    }

    /**
     * Get aMaterno
     *
     * @return string
     */
    public function getAMaterno()
    {
        return $this->aMaterno;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     *
     * @return Empleado
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set curp
     *
     * @param string $curp
     *
     * @return Empleado
     */
    public function setCurp($curp)
    {
        $this->curp = $curp;

        return $this;
    }

    /**
     * Get curp
     *
     * @return string
     */
    public function getCurp()
    {
        return $this->curp;
    }

    /**
     * Set nss
     *
     * @param integer $nss
     *
     * @return Empleado
     */
    public function setNss($nss)
    {
        $this->nss = $nss;

        return $this;
    }

    /**
     * Get nss
     *
     * @return integer
     */
    public function getNss()
    {
        return $this->nss;
    }

    /**
     * Set ley
     *
     * @param string $ley
     *
     * @return Empleado
     */
    public function setLey($ley)
    {
        $this->ley = $ley;

        return $this;
    }

    /**
     * Get ley
     *
     * @return string
     */
    public function getLey()
    {
        return $this->ley;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return Empleado
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numExt
     *
     * @param integer $numExt
     *
     * @return Empleado
     */
    public function setNumExt($numExt)
    {
        $this->numExt = $numExt;

        return $this;
    }

    /**
     * Get numExt
     *
     * @return integer
     */
    public function getNumExt()
    {
        return $this->numExt;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return Empleado
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Empleado
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     *
     * @return Empleado
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Empleado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Empleado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set edoCivil
     *
     * @param string $edoCivil
     *
     * @return Empleado
     */
    public function setEdoCivil($edoCivil)
    {
        $this->edoCivil = $edoCivil;

        return $this;
    }

    /**
     * Get edoCivil
     *
     * @return string
     */
    public function getEdoCivil()
    {
        return $this->edoCivil;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Empleado
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set lugarNacimiento
     *
     * @param string $lugarNacimiento
     *
     * @return Empleado
     */
    public function setLugarNacimiento($lugarNacimiento)
    {
        $this->lugarNacimiento = $lugarNacimiento;

        return $this;
    }

    /**
     * Get lugarNacimiento
     *
     * @return string
     */
    public function getLugarNacimiento()
    {
        return $this->lugarNacimiento;
    }

    /**
     * Set genero
     *
     * @param string $genero
     *
     * @return Empleado
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set fechaIniGobSep
     *
     * @param \DateTime $fechaIniGobSep
     *
     * @return Empleado
     */
    public function setFechaIniGobSep($fechaIniGobSep)
    {
        $this->fechaIniGobSep = $fechaIniGobSep;

        return $this;
    }

    /**
     * Get fechaIniGobSep
     *
     * @return \DateTime
     */
    public function getFechaIniGobSep()
    {
        return $this->fechaIniGobSep;
    }

    /**
     * Set fechaIniSep
     *
     * @param \DateTime $fechaIniSep
     *
     * @return Empleado
     */
    public function setFechaIniSep($fechaIniSep)
    {
        $this->fechaIniSep = $fechaIniSep;

        return $this;
    }

    /**
     * Get fechaIniSep
     *
     * @return \DateTime
     */
    public function getFechaIniSep()
    {
        return $this->fechaIniSep;
    }

    /**
     * Set fechaIniTec
     *
     * @param \DateTime $fechaIniTec
     *
     * @return Empleado
     */
    public function setFechaIniTec($fechaIniTec)
    {
        $this->fechaIniTec = $fechaIniTec;

        return $this;
    }

    /**
     * Get fechaIniTec
     *
     * @return \DateTime
     */
    public function getFechaIniTec()
    {
        return $this->fechaIniTec;
    }

    /**
     * Set fechaIniCiidet
     *
     * @param \DateTime $fechaIniCiidet
     *
     * @return Empleado
     */
    public function setFechaIniCiidet($fechaIniCiidet)
    {
        $this->fechaIniCiidet = $fechaIniCiidet;

        return $this;
    }

    /**
     * Get fechaIniCiidet
     *
     * @return \DateTime
     */
    public function getFechaIniCiidet()
    {
        return $this->fechaIniCiidet;
    }

    /**
     * Set clavePresupuestal
     *
     * @param string $clavePresupuestal
     *
     * @return Empleado
     */
    public function setClavePresupuestal($clavePresupuestal)
    {
        $this->clavePresupuestal = $clavePresupuestal;

        return $this;
    }

    /**
     * Get clavePresupuestal
     *
     * @return string
     */
    public function getClavePresupuestal()
    {
        return $this->clavePresupuestal;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Empleado
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set interinato
     *
     * @param string $interinato
     *
     * @return Empleado
     */
    public function setInterinato($interinato)
    {
        $this->interinato = $interinato;

        return $this;
    }

    /**
     * Get interinato
     *
     * @return string
     */
    public function getInterinato()
    {
        return $this->interinato;
    }

    /**
     * Set activo
     *
     * @param string $activo
     *
     * @return Empleado
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
     * Set idAcceso
     *
     * @param \AppBundle\Entity\Acceso $idAcceso
     *
     * @return Empleado
     */
    public function setIdAcceso(\AppBundle\Entity\Acceso $idAcceso = null)
    {
        $this->idAcceso = $idAcceso;

        return $this;
    }

    /**
     * Get idAcceso
     *
     * @return \AppBundle\Entity\Acceso
     */
    public function getIdAcceso()
    {
        return $this->idAcceso;
    }

    /**
     * Set idDepto
     *
     * @param \AppBundle\Entity\Departamento $idDepto
     *
     * @return Empleado
     */
    public function setIdDepto(\AppBundle\Entity\Departamento $idDepto = null)
    {
        $this->idDepto = $idDepto;

        return $this;
    }

    /**
     * Get idDepto
     *
     * @return \AppBundle\Entity\Departamento
     */
    public function getIdDepto()
    {
        return $this->idDepto;
    }

    /**
     * Set idCategoria
     *
     * @param \AppBundle\Entity\Categoria $idCategoria
     *
     * @return Empleado
     */
    public function setIdCategoria(\AppBundle\Entity\Categoria $idCategoria = null)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return \AppBundle\Entity\Categoria
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idPuesto
     *
     * @param \AppBundle\Entity\Puesto $idPuesto
     *
     * @return Empleado
     */
    public function setIdPuesto(\AppBundle\Entity\Puesto $idPuesto = null)
    {
        $this->idPuesto = $idPuesto;

        return $this;
    }

    /**
     * Get idPuesto
     *
     * @return \AppBundle\Entity\Puesto
     */
    public function getIdPuesto()
    {
        return $this->idPuesto;
    }
    /**
     * @var \AppBundle\Entity\Subdireccion
     */
    private $idSubdireccion;


    /**
     * Set idSubdireccion
     *
     * @param \AppBundle\Entity\Subdireccion $idSubdireccion
     *
     * @return Empleado
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
    private $correo;


    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return Empleado
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }
    /**
     * @var string
     */
    private $plaza;


    /**
     * Set plaza
     *
     * @param string $plaza
     *
     * @return Empleado
     */
    public function setPlaza($plaza)
    {
        $this->plaza = $plaza;

        return $this;
    }

    /**
     * Get plaza
     *
     * @return string
     */
    public function getPlaza()
    {
        return $this->plaza;
    }


    public function getUsername()
    {
        return $this->nombre;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getRoles()
   {
       return array('ROLE_USER','ROLE_ADMIN');
   }

   public function eraseCredentials()
   {
   }

   /** @see \Serializable::serialize() */
   public function serialize()
   {
       return serialize(array(
           $this->id,
           $this->nombre,
           $this->password,
           // see section on salt below
           // $this->salt,
       ));
   }

   /** @see \Serializable::unserialize() */
   public function unserialize($serialized)
   {
       list (
           $this->id,
           $this->nombre,
           $this->password,
           // see section on salt below
           // $this->salt
       ) = unserialize($serialized, array('allowed_classes' => false));
   }
}
