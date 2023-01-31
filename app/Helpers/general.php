<?php 

function is_page($pageName)
{
    return request()->segment(2) == $pageName;
}

function img_url($fileName) {
    $url = (env('APP_ENV') == 'local') ? asset("storage/" . $fileName) : str_replace("public/test", "", asset("test/storage/app/public/" . $fileName));
    
    return $url;
}