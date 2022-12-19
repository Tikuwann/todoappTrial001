<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Throwable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TaskUpdateRequest;
use Carbon\Carbon;




class UserController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:users');


    // }
    public function dashboard()
    {
        $userId = Auth::id();
        $time = new Carbon(Carbon::now());
        $time ->format('Y/m/d(d)');
        $tasks = Task::where('user_id', $userId)
        ->whereDate('task_date', '>=', $time)
        ->orderBy('task_date','asc')
        ->get();



        return view('user.dashboard', compact('tasks'));

    }

    public function index()
    {
        // // $contacts = User::select('task_name','task_date', 'task_info')->get();
        // $userId = Auth::id();
        // $time = new Carbon(Carbon::now());
        // $time ->format('Y/m/d(d)');
        // $uptasks = Task::sortable()
        // ->where('user_id', $userId)
        // ->where('complete','0')
        // // ->whereDate('task_date', '>=', $time)
        // ->orderBy('task_date','asc')
        // ->get();
        // $endtasks = Task::sortable()
        // ->where('user_id', $userId)
        // ->where('complete','1')
        // // ->whereDate('task_date', '<', $time)
        // ->orderBy('task_date','asc')
        // ->get();



        $userId = Auth::id();
        $uptasks = Task::sortable()
        ->where('user_id', $userId)
        ->where('complete','0')
        ->orderBy('task_date','asc')
        ->get();
        $endtasks = Task::sortable()
        ->where('user_id', $userId)
        ->where('complete','1')
        ->orderBy('task_date','asc')
        ->get();



        // $tasks = Task::where('user_id', $userId)->latest('task_date')->get();
        // $tasks = Task::where('DATEDIFF(task_date, CURRENT_DATE)')->get();
        // $users = User::where('hogehoge',$hogeValue)->orderBy('created_at','desc')->get();
        return view('user.index', compact( 'uptasks', 'endtasks'));
    }






    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */


     public function show($id)
     {

        $userId = Auth::id();
        // $task_id = Task::where('id', $id)->first('id');
        $tasks = Task::where('id', $id)->where('user_id',$userId) ->get();

        // dd($task);
        return view('user.show', compact('tasks'));
     }





    public function create(Request $request)
    {
        return view('user.create');
    }


    public function store(Request $request)
    {

        // dd($request, $request->task_name, $request->task_date, $request->task_info,);



        $request->validate([
            'task_name' => ['required', 'string', 'max:255'],
            'task_date' => ['required', 'date', 'max:255', ],
            'task_info' => ['string',],
        ]);


        Task::create([

            'task_name' => $request ->task_name,
            'task_date' => $request ->task_date,
            'task_info' => $request ->task_info,

        ]);


    //--TRY
                // try{
                //     DB::transaction(function () use($request) {


                //     $user = User::find([
                //             'id' =>  $request->id,
                //             'name' => $request->name,
                //             'email' => $request->email,
                //             'password' => Hash::make($request->password),
                //         ]);
                //     });



                //     Task::create([
                //         'user_id' =>$user->id,
                //         'task_name' => 'work',
                //         'task_date' => '1996/12/02',
                //         'task_info' => 'can be empty',
                //     ]);

                // }catch(Throwable $e){
                //     Log::error($e);
                //     throw $e;
                // }
    //--/TRY
        return Redirect::route('user.index')->with('status', 'updated');


        // dd($request);
    }


    public function edit($id)
    {


        $userId = Auth::id();
        // $task_id = Task::where('id', $id)->first('id');
        $tasks = Task::where('id', $id)->where('user_id',$userId) ->get();

        // dd($task);
        return view('user.edit', compact('tasks'));
        // return Redirect::route('user.index')->with('status', 'updated');
    }

 // /** ProfileUpdate
    //  * Update the user's profile information.
    //  *
    //  * @param  \App\Http\Requests\TaskUpdateRequest  $request
    //  * @return \Illuminate\Http\RedirectResponse
    //  */
    // public function update(TaskUpdateRequest $request)
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
// }
        // $userId = Auth::id();
        // // $task_id = Task::where('id', $id)->first('id');
        // $tasks = Task::where('id', $id)->where('user_id',$userId) ->get();

        // // dd($task);
        // return view('user.show', compact('tasks'));


    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\TaskUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TaskUpdateRequest $request , $id)
    {

        $task = Task::find($id);
        $task-> task_name = $request->task_name;
        $task-> task_date = $request->task_date;
        $task-> task_info = $request->task_info;
        $task->save();



        return to_route('user.index');
     }




    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request ,$id)
    {

        $task = Task::where('id', $id)->delete();

        // $task ->delete();


        // $request->validateWithBag('userDeletion', [
        //     'password' => ['required', 'current-password'],
        // ]);

        // $user = $request->user();

        // Auth::logout();

        // $user->delete();

        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return to_route('user.index');
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    // public function create()
    // {
    //     return view('auth.register');
    // }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

}
