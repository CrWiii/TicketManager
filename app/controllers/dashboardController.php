<?php
/**
 * Created by PhpStorm.
 * User: Cristhian
 * Date: 04/06/14
 * Time: 12:16 PM
 */

class dashboardController extends BaseController {

    public function dash()
    {
        return View::make('dashboard');
    }

} 