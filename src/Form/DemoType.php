<?php

declare(strict_types = 1);

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;

class DemoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('choice', DateTimeType::class, [
                'widget' => 'choice',
                'model_timezone' => 'UTC',
                'view_timezone' => 'Europe/Berlin',
            ])
            ->add('single_text', DateTimeType::class, [
                'widget' => 'single_text',
                'model_timezone' => 'UTC',
                'view_timezone' => 'Europe/Berlin',
                'format' => 'dd.MM.yyyy kk:mm',
            ])
        ;
    }
}
