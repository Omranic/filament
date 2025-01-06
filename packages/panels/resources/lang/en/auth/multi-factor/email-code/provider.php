<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Email code authentication',

            'messages' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
            ],

        ],

    ],

    'login_form' => [

        'code' => [

            'label' => 'Enter the code we sent you by email',

            'validation_attribute' => 'code',

            'actions' => [

                'resend' => [

                    'label' => 'Send a new code by email',

                    'notifications' => [

                        'resent' => [
                            'title' => 'We\'ve sent you a new code by email',
                        ],

                    ],

                ],

            ],

            'messages' => [

                'invalid' => 'The code you entered is invalid.',

            ],

        ],

    ],

];
