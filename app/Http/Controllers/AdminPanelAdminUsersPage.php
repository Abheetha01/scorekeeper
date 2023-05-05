<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPanelAdminUsersPage extends Controller
{
    public function sendDataXMLHTTP(Request $request)
    {
        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Fail...!']);
        }

        $page = $request->data['pageNumber'];
        $pagePerRecode = 8;
        $startFrom = ($page - 1) * $pagePerRecode;


        $adminUserData = DB::select('select admin_user_id, admin_usr_name, admin_user_email, admin_user_type, admin_user_status 
        FROM adminusers ORDER BY admin_user_id DESC LIMIT '.$startFrom.', '.$pagePerRecode.'');

        $totalRecrods = DB::select('select count(*) as total_records from adminusers');

        return response()->json(['status' => true, 'message' => 'SUCCESSFUL...!', 'adminUserData' => $adminUserData, 'activePage' => $page, 'totalRecrods' => $totalRecrods[0]->total_records]);
    }

    public function updateAdminUserStatus(Request $request)
    {
        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            return response()->json(['status' => 'true', 'message' => 'Fail...!']);
        }

        $adminUserStatusRes = $request->data['adminUserStatus'];
        $admin_user_id = $request->data['adminUserId'];
        $admin_user_status = 1;
        $admin_user_type = "";

        if ($adminUserStatusRes == 0) {
            $admin_user_status = "0";
            $admin_user_type = "PEN";
        } else {
            $admin_user_status = "1";
            $admin_user_type = $adminUserStatusRes;
        }

        try {
            DB::update('update adminusers set adminusers.admin_user_type = "' . $admin_user_type . '", adminusers.admin_user_status = ' . $admin_user_status . ' where adminusers.admin_user_id = ' . $admin_user_id . '');
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'FAIL...!', 'error' => $th]);
        }



        // $adminUserData = DB::select('select admin_user_id, admin_usr_name, admin_user_email, admin_user_type, admin_user_status 
        // FROM adminusers ORDER BY admin_user_id DESC LIMIT 0, 10');

        // return response()->json(['status' => 'true', 'massege' => 'SUCSESSFUL...!','adminUserStatus' => $request->data['adminUserStatus']]);
        return response()->json(['status' => true, 'message' => 'SUCCESSFULLY UPDATED...!', 'activePage'=>$request->data['pageNumber']]);
    }
}
