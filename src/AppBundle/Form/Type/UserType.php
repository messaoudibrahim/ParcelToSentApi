<?php
/**
 * Created by PhpStorm.
 * User: Brahim
 * Date: 24/09/2018
 * Time: 22:01
 */

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname');
        $builder->add('lastname');
        $builder->add('plainPassword'); // Rajout du mot de passe
        $builder->add('email', EmailType::class);
    }

}