<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
         $this->middleware(function($request, $next){

           if(Gate::allows('manage-users')) return $next($request);
           abort(403, 'Anda tidak memiliki cukup hak akses');
       });
    }

    public function index(Request $request)
    {
        $filterKeyword = $request->get('keyword');

        $status = $request->get('status');

        if($status){
            $users = User::where('status', $status)->paginate(10);
        } else {
            $users = User::paginate(10);
        }

        if($filterKeyword){
            if($status){
                $users = User::where('email', 'LIKE', "%$filterKeyword%")
                    ->where('status', $status)
                    ->paginate(10);
            } else {
                $users = User::where('email', 'LIKE', "%$filterKeyword%")
                    ->paginate(10);
            }
        }

        // $users = User::paginate(10);

        // var_dump($users); die;

        // echo count($users); die;

        $context = [
            'title' => 'User List',
            'brand' => 'WebDev::Project',
            'url' => $request->segment(1),
            'second_url' => $request->segment(2),
            'users' => User::where('name', Auth::user()->name)->paginate(10),
            // 'users' => User::where('name', Auth::user()->name)->paginate(10)
            // 'users' => response()->json([
            //     'data' => $users
            // ])
        ];

        return view('pages.dashboard.users.index', $context);
    }

    public function UserData()
    {
        $users = User::first()
                ->paginate(10);
        return response()->json([
            'message' => 'Success fetch data user',
            'data' => $users
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
