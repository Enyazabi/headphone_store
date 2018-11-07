<?php


namespace App\Form;

use App\Entity\Headphone;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HeadphoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('model',null, array(
                'attr'   =>  [
                    'class'   => 'validate'
                ]
            ))
            ->add('description',null, array(
                'attr'   =>  [
                    'class'   => 'validate'
                ]
            ))
            ->add('cost',null, array(
                'attr'   =>  [
                    'class'   => 'validate'
                ]
            ))
            ->add('count',null, array(
                'attr'   =>  [
                    'class'   => 'validate'
                ]
            ))
            ->add('class',null, array(
                'attr'   =>  [
                    'class'   => 'validate'
                ]
            ))
            ->getForm();
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Headphone::class,
        ]);
    }

}