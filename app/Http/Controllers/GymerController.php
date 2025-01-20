<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\user_info_validate;
use App\Models\UserInfo;
use App\Models\DeleteUser;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;



class GymerController extends Controller
{
    // public function userdel(Request $request){
    //     if ($request->ajax()) {
    //         $data = DeleteUser::select('*');


    //         return dataTables()->of($data)
    //             ->addIndexColumn()
    //             ->addColumn('date', function($data){
    //                 return $data->created_at->format('d/m/Y');
    //             })
    //             ->addColumn('time', function($data){
    //                 return $data->created_at->format(' H:i:s');
    //             })
    //             ->addColumn('action', function($data){
    //                 return '<a class="btn btn-outline-dark text-center " href="/admin/'.$data->id.'"> Voir </a>';
    //             })

    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }

    //         return view('subscriptions.removed');
    // }
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
                $abonement=$request->input("abonement");

                $UserInfo = new UserInfo();

                $UserInfo->last_name=$last_name;
                $UserInfo->first_name=$first_name;
                $UserInfo->sex=$sex;
                $UserInfo->cin=$cin;
                $UserInfo->birth=$birth;
                $UserInfo->email=$email;
                $UserInfo->phone=$phone;
                $UserInfo->address=$address;
                $UserInfo->payement=$abonement;

                $UserInfo->save();



                //add new mail
                $birthYear = date('Y', strtotime($birth));
                $password = $last_name . $first_name . $birthYear;

                $user = new User();
                $user->email = $email;
                $user->name = $first_name . ' ' . $last_name;
               // $user->password = Hash::make($password);
                $user->password = $password;
                $user->save();

                $details = [
                    'title' => 'Your Account Password',
                    'body' => 'Your password is: ' . $password
                ];

                Mail::to($email)->send(new \App\Mail\PasswordMail($details));

                return back()
                ->with('success','You have successfully add a new subscriber.');

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


    // public function story(){
    //     // $data = UserInfo::where('sex', '=', $sex)->get();
    //     return view("admin.create");

    //     // return view ('product',[
    //     //     'product'=>$data,
    //     //     'cat'=>$cat
    //     // ]);
    // }

    public function story(Request $request , $etat){


        if($etat =="M" || $etat == "F" ){
            if ($request->ajax()) {
                $data = UserInfo::where('sex', '=', $etat)->get();


                return dataTables()->of($data)
                    ->addIndexColumn()
                    ->addColumn('date', function($data){
                        return $data->created_at->format('d/m/Y');
                    })
                    ->addColumn('time', function($data){
                        return $data->created_at->format(' H:i:s');
                    })
                    ->addColumn('action', function($data){
                        return '<a class="btn btn-outline-dark text-center " href="/admin/'.$data->id.'"> Voir </a>';                    })

                    ->rawColumns(['action'])
                    ->make(true);
            }
        return view('filter',
        ['etat'=>$etat]
        );}
        elseif($etat == "create"){
            {
                return view("admin.create");
            }
        }


    elseif($etat ){
        $client = UserInfo::find($etat);
        if (!$client) {
            abort(404);
        }
        return view("admin.show",[ "data"=>$client ] );
    }
}



}
