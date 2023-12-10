<?php

    namespace App\Form;

    use App\Entity\Visitor;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class VisitorLoginType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options): void
        {
            $builder
                ->add('username', TextType::class, [
                    'label' => 'Nom utilisateur',
                    'attr'  => [
                        'placeholder' => '',
                        'class'       => 'form-control'
                    ]
                ])
                ->add('language', TextType::class, [
                    'label' => 'Langue préférée',
                    'attr'  => [
                        'placeholder' => '',
                        'class'       => 'form-control'
                    ]
                ]);
        }

        public function configureOptions(OptionsResolver $resolver): void
        {
            $resolver->setDefaults([
                                       'data_class' => Visitor::class,
                                   ]);
        }
    }
