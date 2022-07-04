<?php

Route::group([
        'prefix'        => 'admin/projects',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'ACME\Projects\Http\Controllers\ProjectsController@index')->name('admin.projects.index');

});