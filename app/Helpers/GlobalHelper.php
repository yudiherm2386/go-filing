<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Session;
use App\Models\UserGroupPrivileges;
use App\Models\Menus;
use App\Models\UserPrivileges;

class GlobalHelper {
	public static function DateIndo($str) {
        $result = '';
        if ($str != null) {
            $date = date("Y-m-d", strtotime($str));
            $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $arr = explode('-', $date);
            $result = $arr[2] . ' ' . $bulan[ (int)$arr[1] ] . ' ' . $arr[0];
        }
		
		return $result;
	}
}