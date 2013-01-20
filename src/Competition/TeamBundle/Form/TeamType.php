<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 14/01/13
 * Time: 21:54
 */
namespace Competition\TeamBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('tag')
            ->add('web', null, array('required' => false))
            ->add('description', null, array('required' => false))
            ->add('avatar', null, array('required' => false));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Competition\TeamBundle\Entity\Team'
        ));
    }

    public function getName()
    {
        return 'competition_teambundle_teamtype';
    }
}
