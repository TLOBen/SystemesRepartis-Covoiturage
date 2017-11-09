<?php

namespace AppBundle\Form;

use AppBundle\Entity\Trajet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrajetFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('villeDepart')
            ->add('villeArrivee')
            ->add('dateDepart')
            ->add('maxPlaces')
            ->add('prix');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Trajet::class,
        ));
    }
}
