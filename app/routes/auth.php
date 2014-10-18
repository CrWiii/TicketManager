<?php

Route::get('dashboard',              ['as' => 'dashboard',           'uses' => 'dashboardController@dash']);

Route::get('account',                ['as' => 'account',             'uses' => 'UserController@account']);
Route::put('account',                ['as' => 'update_account',      'uses' => 'UserController@UpdateAccount']);

Route::get('profile',                ['as' => 'profile',             'uses' => 'UserController@profile']);
Route::put('profile',                ['as' => 'update_profile',      'uses' => 'UserController@UpdateProfile']);


Route::get('settings',               ['as' => 'settings',            'uses' => 'UserController@settings']);
Route::put('settings',               ['as' => 'update_settings',     'uses' => 'UserController@UpdateSettings']);

Route::get('ListTicket',             ['as' => 'list_ticket',         'uses' => 'TicketController@ListTicket']);

Route::get('RegisterTicket',         ['as' => 'registration_ticket', 'uses' => 'TicketController@RegistrationTicket']);
Route::post('RegisterTicket',        ['as' => 'register_ticket',     'uses' => 'TicketController@RegisterTicket']);

Route::get('QuickTicket',            ['as' => 'fast_ticket',         'uses' => 'TicketController@FastTicket']);
Route::post('QuickTicket',           ['as' => 'quick_ticket',        'uses' => 'TicketController@QuickTicket']);

Route::get('ShowTicket/{id}',        ['as' => 'show_ticket',         'uses' => 'TicketController@ShowTicket']);

Route::get('DiagnoseTicket/{id}',    ['as' => 'diagnostic_ticket',   'uses' => 'TicketController@DiagnosticTicket']);
Route::post('DiagnoseTicket',        ['as' => 'diagnose_ticket',     'uses' => 'TicketController@DiagnoseTicket']);

Route::get('SolveTicket/{id}',       ['as' => 'solution_ticket',     'uses' => 'TicketController@SolutionTicket']);
Route::post('SolveTicket',           ['as' => 'solve_ticket',        'uses' => 'TicketController@SolveTicket']);

Route::get('FollowTicket/{id}',      ['as' => 'tracking_ticket',     'uses' => 'TicketController@TrackingTicket']);
Route::post('FollowTicket',          ['as' => 'follow_ticket',       'uses' => 'TicketController@FollowTicket']);

Route::get('ConfirmTicket/{id}',     ['as' => 'confirm_ticket',      'uses' => 'TicketController@confirmTicket']);
Route::post('ConfirmTicket',         ['as' => 'verify_ticket',       'uses' => 'TicketController@verifyTicket']);

Route::get('logout',                 ['as' => 'logout',              'uses' => 'AuthController@logout']);

//routes for jquery
Route::get('getLocal',               ['as' => 'getLocal',            'uses' => 'TicketController@getLocal']);
Route::get('getPerson',              ['as' => 'getPerson',           'uses' => 'TicketController@getPerson']);
Route::get('getCategory',            ['as' => 'getCategory',         'uses' => 'TicketController@getCategory']);
Route::get('getSubCategory',         ['as' => 'getSubCategory',      'uses' => 'TicketController@getSubCategory']);
Route::get('getSpecify',             ['as' => 'getSpecify',          'uses' => 'TicketController@getSpecify']);

/*
Route::get('getLocal', function(){

        $Local =  Input::get('term');
        //$data = $this->localRepo->getLocal(array($Local));
        $data = [
            '1' => 'Lince 01',
            '2' => 'Lince 02',
            '3' => 'Marina 01',
            '4' => 'Marina 03',
        ];

        $result = [];

        foreach($data as $id => $Description){
            if(strpos(Str::lower($Description), $Local) !== false){
                $result[]=['value'=>$Description, 'id' =>$id];
            }
        }
        return Response::json($result);


});*/
