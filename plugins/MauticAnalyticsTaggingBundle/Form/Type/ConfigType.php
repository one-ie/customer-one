<?php

/**
 * @copyright   2015 Mautic Contributors. All rights reserved.
 * @author      Mautic
 *
 * @see        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticAnalyticsTaggingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class ConfigType.
 */
class ConfigType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('active', 'yesno_button_group', [
            'label' => 'mautic.analytics.tagging.active',
            'data'  => (bool) $options['data']['active'],
        ]);

        $builder->add('utm_source', 'text', [
            'label'      => 'mautic.analytics.tagging.utm_source',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.analytics.tagging.utm_source.tooltip',
            ],
        ]);
        $builder->add('utm_medium', 'text', [
            'label'      => 'mautic.analytics.tagging.utm_medium',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.analytics.tagging.utm_medium.tooltip',
            ],
        ]);

        $builder->add('utm_campaign', 'choice', [
            'choices' => [
                'name'     => 'mautic.analytics.tagging.utm_campaign.name',
                'subject'  => 'mautic.analytics.tagging.utm_campaign.subject',
                'category' => 'mautic.analytics.tagging.utm_campaign.category',
            ],
            'label' => 'mautic.analytics.tagging.utm_campaign',
            'attr'  => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.analytics.tagging.utm_campaign.tooltip',
            ],
            'empty_value' => false,
            'constraints' => [
                new NotBlank(
                        [
                    'message' => 'mautic.core.value.required',
                        ]
                ),
            ],
        ]);

        $builder->add('utm_content', 'choice', [
            'choices' => [
                'name'     => 'mautic.analytics.tagging.utm_campaign.name',
                'subject'  => 'mautic.analytics.tagging.utm_campaign.subject',
                'category' => 'mautic.analytics.tagging.utm_campaign.category',
            ],
            'label' => 'mautic.analytics.tagging.utm_content',
            'attr'  => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.analytics.tagging.utm_content.tooltip',
            ],
            'empty_value' => false,
            'constraints' => [
                new NotBlank(
                        [
                    'message' => 'mautic.core.value.required',
                        ]
                ),
            ],
        ]);

        $builder->add('remove_accents', 'yesno_button_group', [
            'label' => 'mautic.analytics.tagging.remove_accents',
            'data'  => (bool) $options['data']['remove_accents'],
            'attr'  => [
                'tooltip' => 'mautic.analytics.tagging.remove_accents.tooltip',
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'tagging';
    }
}
