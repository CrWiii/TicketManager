<?php

/*Route::get('admin/candidate/{id}', ['as' => 'admin_candidate_edit', function ($id) {

    return 'Editando el candidato ' . $id;


}]);*/

Route::get('ReclassifyTicket',       ['as' => 'recategorisation_ticket', 'uses' => 'TicketController@recategorisationTicket']);
Route::post('ReclassifyTicket',      ['as' => 'reclassify_ticket',   'uses' => 'TicketController@reclassifyTicket']);

Route::get('AssignTicket/{id}',      ['as' => 'assignment_ticket',   'uses' => 'TicketController@AssignmentTicket']);
Route::post('AssignTicket',          ['as' => 'assign_ticket',       'uses' => 'TicketController@AssignTicket']);

Route::get('ReallocateTicket/{id}',  ['as' => 'reassignment_ticket', 'uses' => 'TicketController@ReassignmentTicket']);
Route::post('ReallocateTicket',      ['as' => 'reallocate_ticket',   'uses' => 'TicketController@ReallocateTicket']);

Route::get('RejectTicket/{id}',      ['as' => 'refusal_ticket',      'uses' => 'TicketController@RefusalTicket']);
Route::post('RejectTicket',          ['as' => 'reject_ticket',       'uses' => 'TicketController@RejectTicket']);

Route::get('ListUser',               ['as' => 'list_users',           'uses' => 'UserController@ListUsers']);