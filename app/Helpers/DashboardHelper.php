<?php

namespace App\Helpers;

use App\Helpers\GlobalHelper;
use App\Models\Functions;
use App\Models\Projects;
use App\Models\Documents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use stdClass;

/**
 *
 */
class DashboardHelper
{
    public static function GetStatistic()
    {
        $result = new stdClass();
        $result->function = new stdClass();
        $result->project = new stdClass();
        $result->document = new stdClass();

        $result->function->count = Functions::count();
        $result->function->last_updated  = GlobalHelper::DateIndo(Functions::orderBy('updated_at','desc')->value('updated_at'));

        $result->project->count  = Projects::count();
        $result->project->last_updated  = GlobalHelper::DateIndo(Projects::orderBy('updated_at','desc')->value('updated_at'));

        $result->document->count  = Documents::count();
        $result->document->last_updated  = GlobalHelper::DateIndo(Documents::orderBy('updated_at','desc')->value('updated_at'));
        
        return $result;
    }

    public static function GetSummaryProject() 
    {
        $result = new stdClass();
        $functions = Functions::all();
        if ($functions) {
            foreach ($functions as $dt) {
                $key = $dt->name;
                $result->$key = new stdClass();
            }
        }
        
        return $result;
    }
}
