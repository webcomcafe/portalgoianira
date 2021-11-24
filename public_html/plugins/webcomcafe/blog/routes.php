<?php

Route::get('/info', function(){

    ob_start();

    phpinfo();

    $str = ob_get_clean();

    file_put_contents('info.html', $str);

    echo 'OK';
});
