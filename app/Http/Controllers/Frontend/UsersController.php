<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    private $model = null;
    
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    
    /**
     * get index page
     * 
     * @return mixed
     */
    public function index()
    {
        return view('frontend.user.index')->withUsers(User::all());
    }
    
    /**
     * render create user page
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('frontend.user.create');
    }
    
    /**
     * show edit page
     * 
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        return view('frontend.user.edit')->withUser(User::find($id));
    }
    
    /**
     * store method for created and updated data
     * 
     * @param UserRequest $request
     * @param null $id
     * @return string
     */
    public function store(UserRequest $request, $id = null)
    {
        try {
            if ($this->model->store($request->all(), $id)) {
                return redirect()->route('users.all')->withMsg('Successfully Stored');
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    /**
     * delete user
     * 
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        if($this->model->destroy($id)) {
            return redirect()->route('users.all')->withMsg('Successfully Deleted');
        }
    }
}
