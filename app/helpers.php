<?php

function get_db_config()
{
    $url = parse_url(getenv("DATABASE_URL"));

    return $db_config = [
        'connection' => 'pgsql',
        'host' => $url["host"],
        'database'  => substr($url["path"], 1),
        'username'  => $url["user"],
        'password'  => $url["pass"],
    ];
}
