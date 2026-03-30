<?php

namespace App\Http\Controllers\Adminpnlx;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    public $modelName = "User";
    public $sectionName = "User";
    public function __construct(){
        View::share('modelName', $this->modelName);
        View::share('sectionName', $this->sectionName);
    }
    public function index()
    {
        return view('adminpnlx.' . $this->modelName . '.index');
    }

    public function resultData(Request $request)
    {
        $columns = ['id', 'name', 'created_at'];

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('search.value');

        $responseData = $this->resultDataModal($request, $limit, $start, $order, $dir, $search);

        $results = $responseData['results'];
        $totalData = $responseData['totalData'];
        $totalFiltered = $responseData['totalFiltered'];

        $data = [];
        $sno = $start + 1;
        foreach ($results as $result) {
            $action = '';
            $action .= '<a href="' . route($this->modelName .'.edit', $result->id) . '" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                        <span class="svg-icon svg-icon-md">                                
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g fill="none">
                                    <rect width="24" height="24"></rect>
                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 
                                    L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 
                                    L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 
                                    L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 
                                    L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                    fill="#000000" transform="rotate(-135 12 10.7)"></path>
                                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                </g>
                            </svg>                            
                        </span>
                    </a>';

            $action .= '<a href="javascript:;" class="btn btn-sm btn-clean btn-icon deleteItem" title="Delete" 
                data-url="' . route($this->modelName .'.delete') . '"  data-id="' . $result->id . '">
                <span class="svg-icon svg-icon-md">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg>
                </span>
            </a>';

            $data[] = [
                'id' => $sno++,
                'name' => e($result->name),
                'created_at' => date('d-m-Y', strtotime($result->created_at)),
                'action' => $action
            ];
        }

        return response()->json([
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        ]);
    }

    private function resultDataModal($request, $limit, $start, $order, $dir, $search)
    {
        $name = $request->name ?? '';
        $query = User::where('users.is_deleted', 0);

        if (!empty($name)) {
            $query->where('users.name', $name);
        }

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('categories.name', 'LIKE', "%{$search}%")
                    ->orWhere('users.name', 'LIKE', "%{$search}%");
            });
        }

        $totalData = (clone $query)->count();
        $query->orderBy($order, $dir);

        // Apply pagination
        if ($limit != -1) {
            $query->offset($start)->limit($limit);
        }

        $results = $query->get();
        $totalFiltered = $totalData;
        return [
            'results' => $results,
            'totalData' => $totalData,
            'totalFiltered' => $totalFiltered
        ];
    }

    public function create()
    {
        return view('adminpnlx.' . $this->modelName . '.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ]
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            $obj = new User();
            $obj->name = $request->input('name');
            $obj->email = $request->input('email');
            $obj->password = $request->input('password');
            $obj->description = $request->input('description');
            $obj->save();
            return redirect()->route($this->modelName . '.index')->with('success', $this->sectionName .' Added Successfully.');
        }
    }


    public function edit(Request $request, $id)
    {
        $modalDetail = User::where('id', $id)->first();
        return view('adminpnlx.' . $this->modelName . '.edit', compact('modalDetail'));
    }

    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $modelDetail = User::where('id', $id)->first();

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ]
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();

        } else {

            $obj = $modelDetail;
            $obj->name = $request->input('name');
            $obj->email = $request->input('email');
            $obj->password = $request->input('password');
            $obj->description = $request->input('description');
            $obj->save();

            return redirect()->route($this->modelName . '.index')->with('success', $this->sectionName .' Updated Successfully.');
        }
    }


    public function delete(Request $request)
    {
        $id = $request->input('id');
        $modelDetail = User::find($id);
        if (!$modelDetail) {
            return response()->json([
                'status' => false,
                'message' => 'User not found'
            ], 404);
        }
        $modelDetail->delete();
        return response()->json([
            'status' => true,
            'message' => $this->sectionName .' Deleted successfully'
        ]);
    }

}
