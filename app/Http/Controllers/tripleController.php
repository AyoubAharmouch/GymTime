<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;
use App\Models\DeleteUser;
use App\Models\UserInfo;
// use App\Models\coatch;



class tripleController extends Controller
{
    public function home() {
        $coaches = Coach::all(); // Correction du modèle 'coatch' -> 'Coach'
        return view('home.home', ['coaches' => $coaches]);
    }



    public function userdel(Request $request)
    {

        if ($request->ajax()) {
            $data = DeleteUser::select('*');


            return dataTables()->of($data)
                ->addIndexColumn()
                ->addColumn('date', function($data){
                    return $data->created_at->format('d/m/Y');
                })
                ->addColumn('time', function($data){
                    return $data->created_at->format(' H:i:s');
                })
                ->addColumn('action', function($data){
                    return '<a class="btn btn-outline-dark" href="/removed/'. $user->id.'">Show</a> ';

                })

                ->rawColumns(['action'])
                ->make(true);
        }

            return view('admin.removed');
        }


    public function show(string $id)
    {

        $UserShow= DeleteUser::findOrFail($id);
        return view(

                "admin.removedShow",
                [ "data"=>$UserShow
            ]
        );
    }



    public function destroy($id)
    {
        try {
            // Find the user to delete
            $user = DeleteUser::findOrFail($id);

            // Create a new instance of UserInfo and fill it with the user's data
            $deleteUser = new UserInfo();
            $deleteUser->last_name = $user->last_name;
            $deleteUser->first_name = $user->first_name;
            $deleteUser->sex = $user->sex;
            $deleteUser->CIN = $user->CIN;
            $deleteUser->birth = $user->birth;
            $deleteUser->email = $user->email;
            $deleteUser->phone = $user->phone;
            $deleteUser->address = $user->address;
            $deleteUser->save();

            // Delete the user from DeleteUser table
            $user->delete();

            return response()->json(['success' => true, 'message' => 'User archived and deleted successfully']);
        } catch (\Exception $e) {
            Log::error('Deletion failed: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Server error', 'error' => $e->getMessage()], 500);
        }
    }
}
