<?php
function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}
function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WEB . $script_path;
}

function redirect_to($location) {
    header("Location: " . $location);
    exit;
}