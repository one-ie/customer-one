<?php

namespace MauticPlugin\SmsreaderBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class Config extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('accountId', TextType::class)
        ->add('unsubscribeKeywords', TextType::class, [
             'label' => 'Unsubscribe Keywords (comma-separated)',
            ]
        )
         ->add('resubscribeKeywords', TextType::class, [
              'label' => 'Re-Subscribe Keywords (comma-separated)',
             ]
         )
        ->add('save', SubmitType::class, ['label' => 'Save Config']);

        return $builder;
    }

    public function getName()
    {
        return 'smsreader_config';
    }
}
