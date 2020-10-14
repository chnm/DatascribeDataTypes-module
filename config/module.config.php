<?php
namespace DatascribeDataTypes;

return [
    'datascribe_data_types' => [
        'invokables' => [
            'populated_place_select' => DatascribeDataType\PopulatedPlaceSelect::class,
        ],
    ],
    'view_helpers' => [
        'invokables' => [
            'formDatascribeDataTypesPopulatedPlaceSelect' => Form\ViewHelper\FormDatascribeDataTypesPopulatedPlaceSelect::class,
        ],
        'delegators' => [
            'Laminas\Form\View\Helper\FormElement' => [
                Service\Delegator\FormElementDelegatorFactory::class,
            ],
        ],
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => OMEKA_PATH . '/modules/Datascribe/language',
                'pattern' => '%s.mo',
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            sprintf('%s/../view', __DIR__),
        ],
    ],
];
