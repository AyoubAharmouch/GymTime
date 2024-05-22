<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\user_info_validate;
use App\Models\UserInfo;
use App\Models\DeleteUser;
use Illuminate\Support\Facades\Log;



class GymerController extends Controller
{
    
    public function index(Request $request)
{
    
    if ($request->ajax()) {
        $data = UserInfo::select('*');
            

        return dataTables()->of($data)
            ->addIndexColumn()
            ->addColumn('date', function($data){
                return $data->created_at->format('d/m/Y');
            })
            ->addColumn('time', function($data){
                return $data->created_at->format(' H:i:s');
            })
            ->addColumn('action', function($data){
                return '<a class="btn btn-outline-dark text-center " href="/admin/'.$data->id.'"> Voir </a>';
            })
            
            ->rawColumns(['action'])
            ->make(true);
    }
    
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(request $request)
        {
            // $request->validated();
        
            $last_name=$request->input("last_name");
            $first_name=$request->input("first_name");
            $sex=$request->input("sex");
            $cin=$request->input("cin");
            $birth=$request->input("birth");
            $email=$request->input("email");
            $phone=$request->input("phone");
            $address=$request->input("address");

            $UserInfo = new UserInfo();
            
            $UserInfo->last_name=$last_name;
            $UserInfo->first_name=$first_name;
            $UserInfo->sex=$sex;
            $UserInfo->cin=$cin;
            $UserInfo->birth=$birth;
            $UserInfo->email=$email;
            $UserInfo->phone=$phone;
            $UserInfo->address=$address;
            
            $UserInfo->save();

            return back()
            ->with('success','You have successfully added an article.');

        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $UserShow= UserInfo::findOrFail($id);
        return view(
            
                "admin.show",
               [ "data"=>$UserShow
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $gymer = UserInfo::find($id);

            if (!$gymer) {
                return response()->json(['success' => false, 'message' => 'Data not found'], 404);
            }

            $field = $request->all();
            $key = array_key_first($field);
            $value = $field[$key];

            $gymer->$key = $value;
            $gymer->save();

            return response()->json(['success' => true, 'message' => 'Data updated successfully']);
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Update failed: '.$e->getMessage());
            return response()->json(['success' => false, 'message' => 'Server error', 'error' => $e->getMessage()], 500);
        }
    }



    public function destroy($id)
    {
        try {
            // Find the user to delete
            $user = UserInfo::findOrFail($id);
    
            // Create a new instance of DeleteUser and fill it with the user's data
            
            $deleteUser = new DeleteUser();
            
            $deleteUser->last_name=$user->last_name;
            $deleteUser->first_name=$user->first_name;
            $deleteUser->sex=$user->sex;
            $deleteUser->CIN=$user->CIN;
            $deleteUser->birth=$user->birth;
            $deleteUser->email=$user->email;
            $deleteUser->phone=$user->phone;
            $deleteUser->address=$user->address;
            
            $deleteUser->save();

    
            // Delete the user from UserInfo table
            $user->delete();
    
            return response()->json(['success' => true, 'message' => 'User archived and deleted successfully']);
        } catch (\Exception $e) {
            Log::error('Deletion failed: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Server error', 'error' => $e->getMessage()], 500);
        }
    }

}
