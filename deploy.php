<?php

namespace Deployer;

require 'recipe/laravel.php';

set( 'repository', 'https://github.com/GuidoOffermans/5m2-Collective.git' );

add( 'shared_files', [] );
add( 'shared_dirs', [] );
add( 'writable_dirs', [] );

host( '194.13.82.194' )
    ->setRemoteUser( 'atheros' )
    ->setDeployPath( '~/apps/5m2-Collective' );

task( 'build', function () {
    cd( '{{release_path}}' );
    run( 'npm run build' );
} );

after( 'deploy:failed', 'deploy:unlock' );
