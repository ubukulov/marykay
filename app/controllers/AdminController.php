<?php

use Acme\Forms\LoginForm;

class AdminController extends \BaseController {

	/**
	 * construct method
	 */
	protected $loginForm;

	public function __construct(LoginForm $loginForm)
	{
		$this->loginForm = $loginForm;
	}

	/**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::check()){
			return View::make('admin.home');
		} else {
			return Redirect::intended('auth');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/create
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check()) return Redirect::intended('/admin');
		return View::make('admin.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->loginForm->validate($input = Input::only('email', 'password'));

		if(Auth::attempt($input)){
			return Redirect::intended('/admin');
		}
		return Redirect::back()->withInput()->withFlashMessage('Введенные данные не правильно');
	}

	/**
	 * Display the specified resource.
	 * GET /admin/{id}
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
	 * GET /admin/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit_page($id)
	{
		$page = Menu::find($id);
		return View::make('admin/pages/edit', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update_page($id)
	{
		$page = Menu::findOrFail($id);
		$validator = Validator::make($data = Input::all(), Menu::$rules);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$page->update($data);
		return Redirect::route('admin/pages/index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function logout() {
		Auth::logout();
		return Redirect::home();
	}
	
	public function pages() {
		return View::make('admin/pages/index');
	}
}