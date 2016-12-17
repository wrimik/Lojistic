<?php

/**
 * gets the site version
 * @return string
 */
function v()
{
    return getenv('SITE_VERSION') ? getenv('SITE_VERSION') : '1.0.0';
}
