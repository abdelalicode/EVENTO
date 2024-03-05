<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Access\AuthorizationException;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    { 
       
         $this->authorize('access-admin');
          echo "ALLO ADMIN";

        
    }

    public function OrgaDashboard()
    { 
            $this->authorize('access-organisateur');
            echo "ALLO organisateur";
    }
}
