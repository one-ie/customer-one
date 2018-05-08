<?php

return [
    'name'        => 'Google Analytics tagging',
    'description' => 'Tagging for emails.',
    'version'     => '1.0',
    'author'      => 'kuzmany.biz',
    'services'    => [
        'forms' => [
            'mautic.form.type.tagging' => [
                'class' => 'MauticPlugin\MauticAnalyticsTaggingBundle\Form\Type\ConfigType',
                'alias' => 'tagging',
            ],
        ],
        'events' => [
            'mautic.analyticstagging.emailbundle.subscriber' => [
                'class' => 'MauticPlugin\MauticAnalyticsTaggingBundle\EventListener\EmailSubscriber',
            ],
            'mautic.analyticstagging.configbundle.subscriber' => [
                'class' => 'MauticPlugin\MauticAnalyticsTaggingBundle\EventListener\ConfigSubscriber',
            ],
        ],
    ],
    'parameters' => [
        'active'         => true,
        'utm_source'     => 'mautic',
        'utm_medium'     => 'email',
        'utm_campaign'   => 'category',
        'utm_content'    => 'subject',
        'remove_accents' => true,
    ],
];
