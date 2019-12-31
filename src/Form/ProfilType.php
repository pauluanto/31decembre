<?php

namespace App\Form;

use App\Entity\Profil;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('age')
            ->add('taille')
            ->add('poid')
            ->add('couleur_yeux')
            ->add('couleur_cheveux')
            ->add('citation')
            ->add('livres')
            ->add('cinema')
            ->add('loisir')
            ->add('langue_parle')
            ->add('activite_prefere')
            ->add('photo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Profil::class,
        ]);
    }
}
