<?php

use App\Models\Page;

function GetContent($key)
{
    $page = Page::where('key', $key)->first();
    if ($page) {
        return $page->content;
    } else {
        return '';
    }
}
