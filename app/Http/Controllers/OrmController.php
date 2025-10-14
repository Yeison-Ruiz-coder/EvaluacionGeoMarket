<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\ChatsSupport;
use App\Models\Complaints;
use App\Models\Images;
use App\Models\Publications;
use App\Models\PublicationsUsers;
use App\Models\Roles;
use App\Models\Sellers;
use App\Models\User;
use Illuminate\Http\Request;

class OrmController extends Controller
{
        public function consulta(){

        $collection = PublicationsUsers::all();
        return ($collection);

    }
}
