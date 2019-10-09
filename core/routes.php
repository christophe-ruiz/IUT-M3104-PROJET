<?php

Route::set('index', function (){
    Index::CreateView('index');
});

Route::set('topic', function (){
    Topic::CreateView('topic');
});
