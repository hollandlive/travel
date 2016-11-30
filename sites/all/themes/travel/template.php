<?php

function travel_preprocess_page(&$vars) {
    //for tpl suggestions
    if (isset($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] ='fucky__' . $vars['node']->type;
    }
}

function theme_travel_hook($variables) {
    $parameter = $variables['parameter'];
    if (!empty($parameter)) {
        return '<div class="my-theme-hook">' . $parameter . '</div>';
    }
}