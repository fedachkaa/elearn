<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all()->where('is_admin', 0);
        $count_questions = Question::all()->count();
        return view('admin.users.show-users', compact('users', 'count_questions'));
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->route('users.index');
    }
}
