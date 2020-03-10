<?php

namespace App\Form;

use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, [
                'label'=> 'Titre'
            ])
            ->add('description', null, [
                'label'=> 'Description du bien'
            ])
            ->add('surface'
                , null, [
                    'label'=> 'Surface (en m²)'
                ])
            ->add('rooms', null, [
                'label'=> 'Pièces'
            ])
            ->add('floor', null, [
                'label'=> 'Etages'
            ])
            ->add('price', null, [
                'label'=> 'Loyer'
            ])
            ->add('city', null, [
                'label'=> 'Ville'
            ])
            ->add('address', null, [
                'label'=> 'Adresse'
            ])
            ->add('cp', null, [
                'label'=> 'Code postal'
            ])
            ->add('locate', null, [
                'label'=> 'Is it rented?'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
