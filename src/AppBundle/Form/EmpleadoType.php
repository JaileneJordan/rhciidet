<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpleadoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('claveEmpleado')->add('nombre')->add('aPaterno')->add('aMaterno')->add('rfc')->add('curp')->add('nss')->add('ley')->add('calle')->add('numExt')->add('colonia')->add('cp')->add('municipio')->add('estado')->add('telefono')->add('correo')->add('edoCivil')->add('fechaNacimiento')->add('lugarNacimiento')->add('genero')->add('fechaIniGobSep')->add('fechaIniSep')->add('fechaIniTec')->add('fechaIniCiidet')->add('clavePresupuestal')->add('password')->add('interinato')->add('activo')->add('plaza')->add('idAcceso')->add('idDepto')->add('idSubdireccion')->add('idCategoria')->add('idPuesto');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Empleado'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_empleado';
    }


}
