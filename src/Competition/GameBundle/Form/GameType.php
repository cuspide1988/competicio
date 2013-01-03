<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 1/01/13
 * Time: 17:56
 */

namespace Competition\GameBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('slug', 'entity', array(
            'empty_value' => 'Juegos',
            'class' => 'CompetitionGameBundle:Game',
            'property' => 'name',
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Competition\GameBundle\Entity\Game'
        ));
    }

    public function getName()
    {
        return 'competition_gamebundle_gametype';
    }
}
