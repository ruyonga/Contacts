<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Http\Requests\CreateActivityRequest;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    // Handle stuff relating to the activity

           public function __construct()
           {
               $this->middleware('auth');
           }

    //show all the activities
    public function index()
    {

        $activities = Activity::orderBy('created_at', 'desc')->get();

        return view('activity.activities', compact('activities'));
    }

    /**create any activity  */
    public function create()
    {
        if(Auth::check()){
            $activities = Activity::orderBy('created_at', 'desc')->get();

            return view('activity.addActivity', compact('activities'));
        }else{
            return view('auth.login');
        }

    }

    /**
     * show one activity
     */
    public function show($id)
    {
        $activity = Activity::FindOrFail($id);

        return view('activity.show', compact('activity'));
    }

    /**
     *  get inputs and save to the db  with validation
     */

    public function store(CreateActivityRequest $request)
    {

        //Validation

        //Savings
        Activity::create($request->all());

        return redirect('activities');

    }

    /**
     * Edit methhode
     * @param $id
     * @return Factory|View
     */
    public function edit($id)
    {

        $activity = Activity::findOrFail($id);

        return view('activity.edit', compact('activity'));
    }

    /*
     *
     * update with validation
     * */
    public function update($id, CreateActivityRequest $request)
    {

        $activity = Activity::findOrFail($id);

        $activity->update($request->all());

        return redirect('activities');
    }
}
