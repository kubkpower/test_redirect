<?php

function Redirect($url, $permanent = false)
{
    header_remove('Server');
    header_remove('X-Powered-By');
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

Redirect('https://www.wakers.fr/', true);

?>