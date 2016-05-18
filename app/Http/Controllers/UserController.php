<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Tenant;
use Illuminate\Http\Request;
use Gravatar;
use App\Repositories\UserRepository;

class UserController extends Controller {

    protected $user;

    /**
     * @var PostRepository
     */
    protected $repository;


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(UserRepository $repository)
	{

		$this->repository = $repository;

	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->repository->all();
		dd($users);
		return view('users.index', compact('users'))->with('title', 'People');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function profile()
	{
	    $user = Auth::User();
	    $user->setFullNameAttribute();
	    $user->setGravatarAttribute();
	    //dd($user);
	    return view('auth.profile', compact('user'))->with('title', 'User Profile');
	}
	
}
