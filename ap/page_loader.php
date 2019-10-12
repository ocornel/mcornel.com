<?php
get_page($_POST['page']);

function get_page($page) {
    switch ($page) {
        case 'dashboard':
            $load = 'dashboard.php';
            break;
        case 'samples':
            $load = 'samples.php';
            break;
        case 'tool-groups':
            $load = 'tool-groups.php';
            break;
        case 'tools':
            $load = 'tools.php';
            break;
        case 'lookups':
            $load = 'lookups.php';
            break;
        case 'settings':
            $load = 'settings.php';
            break;
        default:
            $load = 'default.html';
    }
    $result = include("pages/$load");
    return $result;
}
