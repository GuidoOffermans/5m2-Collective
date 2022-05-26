<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set( 'repository', 'https://github.com/GuidoOffermans/5m2-Collective.git' );

add( 'shared_files', [] );
add( 'shared_dirs', [] );
add( 'writable_dirs', [] );

// hello


host( '194.13.82.194' )
    ->set( 'remote_user', 'atheros' )
    ->set( 'deploy_path', '~/apps/5m2-Collective' );

// Tasks

task( 'build', function () {
    cd( '{{release_path}}' );
    run( 'npm run build' );
} );

after( 'deploy:failed', 'deploy:unlock' );
