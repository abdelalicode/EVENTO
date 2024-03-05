<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganisatorController extends Controller
{
    

    public function OrgaDashboard()
    { 
        $this->authorize('access-organisateur');
        echo "ALLO organisateur";
    }
}
