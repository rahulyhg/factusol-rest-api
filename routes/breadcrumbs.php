<?php

use \DaveJamesMiller\Breadcrumbs\Generator;

// https://laravel-breadcrumbs.readthedocs.io/en/latest/

// Dashboard
Breadcrumbs::register('index', function(Generator $breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('index'));
});

// ChangeLog
Breadcrumbs::register('changelog', function(Generator $breadcrumbs)
{
    $breadcrumbs->parent('index');
    $breadcrumbs->push('ChangeLog');
});
