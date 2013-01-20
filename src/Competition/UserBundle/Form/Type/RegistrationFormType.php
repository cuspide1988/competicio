<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 26/12/12
 * Time: 20:04
 */

namespace Competition\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        /*$builder->add('name',  null, array('label' => 'form.name', 'translation_domain' => 'FOSUserBundle', 'required' => false));
        $builder->add('surname',  null, array('label' => 'form.surname', 'translation_domain' => 'FOSUserBundle', 'required' => false));
        $builder->add('country','country', array(
            'preferred_choices' => array('ES'),
            'empty_value' => '----',
            'required' => true
        ));*/
    }

    public function getName()
    {
        return 'competition_user_registration';
    }
}