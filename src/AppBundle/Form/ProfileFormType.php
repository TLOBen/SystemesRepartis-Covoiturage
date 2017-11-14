<?php

namespace AppBundle\Form;

use AppBundle\Form\PreferenceFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('preference', PreferenceFormType::class);
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
