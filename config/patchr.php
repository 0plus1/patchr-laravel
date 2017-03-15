<?php

return [
    'db' => array(
        'host' => env('DB_HOST'),
        'user'  => env('DB_USERNAME'),
        'password' => env('DB_PASSWORD'),
        'database' => env('DB_DATABASE'),
        'table'     => 'patchr_dbpatches',
        'timeout'     => 500,
        'multiple'     => false,
    ),
    'naming' => array(
        'patches_dir' => storage_path().'/patchr',
        'prefix'  => 'patch-',
        'digits' => 5,
        'extension' => '.sql',
    ),
    'adv' => array(
        'skip_patches' => [],
    ),
];