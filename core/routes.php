<?php

Route::set('index', function (){
    Index::CreateView('index');
});

Route::set('board', function (){
    Board::CreateView('board');
});

?>
