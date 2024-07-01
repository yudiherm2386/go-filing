<?php

namespace App\Http\Controllers;

use App\Helpers\MenuHelper;
use App\Helpers\Permission;
use App\Helpers\DashboardHelper;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function Home()
    {
        // dd(Session::all());
        $permission = Permission::get();
        if ($permission->has_access) {
            $statistic = DashboardHelper::GetStatistic();
            $summary_project = DashboardHelper::GetSummaryProject();
            $data = [
                'permission' => $permission,
                'statistic' => $statistic,
                'summary_project' => $summary_project
            ];
            // dd($data);
            return view('modules.dashboard.home', $data);
        } else {
            return abort(403, 'Anda tidak memiliki akses pada menu ini');
        }
    }
}
