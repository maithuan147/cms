<?php

namespace Modules\Role\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return theme()->of('role::backend.create')->render();
    }
}
