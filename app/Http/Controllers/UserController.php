<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;

class UserController extends Controller
{
    public function all_users()
    {
        $current_time = Carbon::now();
        $users = User::paginate(10);
        return view('admin.user.all_users', compact('users', 'current_time'));
    }

    public function registered()
    {
        $current_time = Carbon::now();
        $users = User::paginate(10);
        return view('admin.user.registered', compact('users', 'current_time'));
    }

    public function un_registered()
    {
        $current_time = Carbon::now();
        $users = User::paginate(10);
        return view('admin.user.un_registered', compact('users', 'current_time'));
    }

    public function edit_user($id)
    {
        $user = User::where('id', $id)->first();
        $roles = Role::all();
        $subscription = Subscription::where('user_id', $user->enquiry_id)->first();
        return view('admin.user.edit_user', compact('user', 'roles', 'subscription'));
    }

    public function update_user(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $role = Role::findOrFail($request->input('role'));
        $subscription = Subscription::where('user_id', $user->enquiry_id)->first();

        $user->name = $request->name;
        if ($request->password) {

            $user->password = bcrypt($request->password);
        }
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->state = $request->state;
        $user->investment = $request->investment;
        $user->resource = $request->resource;

        $user->syncRoles([$role]);

        if ($subscription) {

            $user->save();
            return redirect()->back()->with('success', 'Subscription already exist | User edited successfully');
        } else {

            $new_subscription = new Subscription;

            $new_subscription->user_id = $request->id;
            $new_subscription->subscription_name = $request->subscription;
            $new_subscription->starting_date = Carbon::now(); // Current date and time
            if ($request->subscription == '1m') {
                $new_subscription->ending_date = Carbon::now()->addMonth(); // Current date + 1 month
            } elseif ($request->subscription == '2m') {
                $new_subscription->ending_date = Carbon::now()->addMonth(2);
            } elseif ($request->subscription == '3m') {
                $new_subscription->ending_date = Carbon::now()->addMonth(3);
            } elseif ($request->subscription == '1y') {
                $new_subscription->ending_date = Carbon::now()->addYear();
            } elseif ($request->subscription == '2y') {
                $new_subscription->ending_date = Carbon::now()->addYear(2);
            }
            $user->assignRole('Registered User');
            $new_subscription->save();
        }

        $user->save();
        return redirect()->back()->with('success', 'User edited successfully');
    }

    public function help_and_support()
    {
        return view('admin.help_and_support.index');
    }
}
