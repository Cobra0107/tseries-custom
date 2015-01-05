<?php
/**
 * @file
 * this file will validate our existing form
 * and this will implement
 * hook_from_alter()
 */

function custom_ajax_profile_form_alter($form, &$form_state) {
    dsm($form_state);
}
