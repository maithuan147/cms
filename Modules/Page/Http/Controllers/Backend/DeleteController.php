<?php

namespace Modules\Page\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DeleteController extends Controller
{
    public function __invoke()
    {
        return theme()->of('page::backend.index')->render();
    }
}
