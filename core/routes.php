<?php

Route::set('index', function (){
    Index::CreateView('index');
});

Route::set('topic', function (){
    Index::CreateView('topic');
});
