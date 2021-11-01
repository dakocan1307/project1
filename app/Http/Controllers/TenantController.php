<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TenantController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data['PARENTTAG'] = 'tenant';

        return view('tenant.index', $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function data(Request $request)
    {
        if ($request->komplek) {
            $data = Tenant::where('komplek', $request->komplek)->get();
            $recordsFiltered = $data->count();
            $recordsTotal = $data->count();

            return response()->json([
                'draw' => $request->input('draw'),
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsFiltered,
                'data' => $data
            ]);
        } else {
            $data = Tenant::get();
            $recordsFiltered = $data->count();
            $recordsTotal = $data->count();

            return response()->json([
                'draw' => $request->input('draw'),
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsFiltered,
                'data' => $data
            ]);
        }

        // $data = DB::table('tenants')->get();
        // $recordsFiltered = $data->count();
        // $recordsTotal = $data->count();

        // return response()->json([
        //     'draw' => $request->input('draw'),
        //     'recordsTotal' => $recordsTotal,
        //     'recordsFiltered' => $recordsFiltered,
        //     'data' => $data
        // ]);
    }
}
