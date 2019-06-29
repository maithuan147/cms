<?php

namespace Modules\Admin\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Admin;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Contracts\IAdminDbRepository;
use Modules\Admin\Http\Requests\InsertAdminRequest;

class StoreController extends Controller
{
   
    protected $adminRepository;
    private $requestFields = [
        'name', 'email', 'phone', 'status', 'password',
    ];
    
    public function __construct(IAdminDbRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function __invoke(InsertAdminRequest $request,Admin $admin)
    {
        $data = $request->only($this->requestFields);
        $this->adminRepository->insert($data);
        
        return redirect()->route('dashboard.admin::index');
    }
}
