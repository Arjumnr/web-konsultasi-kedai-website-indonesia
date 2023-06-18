<?php

namespace App\Http\Controllers;

use App\Models\ModelDataKonsultasi;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class KonsultasiController extends Controller
{
    public function index(Request $request)
    {
        $data = ModelDataKonsultasi::all();
        try {
            if ($request->ajax()) {
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-success btn-sm edit"><i class="fas fa-fire"></i></a>';
                        $btn =  ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm delete"><i class="ri-delete-bin-2-line"></i></a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view('admin.konsultasi.index');
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
    public function store(Request $request)
    {
        try {
            ModelDataKonsultasi::updateOrCreate(
                ['id' => $request->data_id],
                [
                    'jenis' => $request->jenis,
                    'nama_servis' => $request->nama_servis,
                ]
            );
            return response()->json(['status' => 'success', 'message' => 'Save data successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $dataUser = ModelDataKonsultasi::find($id);
        return response()->json($dataUser);
    }


    public function destroy($id)
    {
        try {
            ModelDataKonsultasi::find($id)->delete();
            return response()->json(['status' => 'success', 'message' => 'Data deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
