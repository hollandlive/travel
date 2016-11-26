<?php

function travel_preprocess_page(&$vars) {
    //for tpl suggestions
    if (isset($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] ='fucky__' . $vars['node']->type;
    }
}
