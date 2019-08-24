<?php


/*
|--------------------------------------------------------------------------
| AceLords Generators Sidebar
|--------------------------------------------------------------------------
|
| This option specifies redis configs that are called by the core.
| Replace the Generator in 'acelords_sidebar.php' with this,
| and enter these options
|
|
*/


use AceLords\Generators\Library\Sidebars\SidebarGenerator;

return [
    'sudo' => SidebarGenerator::forSudo(),

    'general' => array_merge(
        /*
        |--------------------------------------------------------------------------
        | Admin|sudo Dashboard
        |--------------------------------------------------------------------------
        |
        | This option controls the sidebar items admins should see.
        | The role is normally named as 'admin'
        |
        */
        SidebarGenerator::forAdmin(),

    
    )


];
