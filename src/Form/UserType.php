<?php
namespace App\Form;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('username',null, array(
                'attr'   =>  [
                    'class'   => 'validate'
                ]
            ))
            ->add('email',null, array(
                'attr'   =>  [
                    'class'   => 'validate'
                ]
            ))
            ->add('password',null, array(
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
            'data_class' => User::class,
        ]);
    }
}