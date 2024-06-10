<?php

namespace Ductr\Opp\Controllers\Admin;

use Ductr\Opp\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
