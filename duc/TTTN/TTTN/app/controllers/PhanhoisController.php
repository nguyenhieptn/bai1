<?php

class PhanhoisController extends BaseController {

	/**
	 * Phanhoi Repository
	 *
	 * @var Phanhoi
	 */
	protected $phanhoi;

	public function __construct(Phanhoi $phanhoi)
	{
		$this->phanhoi = $phanhoi;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$phanhois = $this->phanhoi->all();

		return View::make('phanhois.index', compact('phanhois'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('phanhois.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Phanhoi::$rules);

		if ($validation->passes())
		{
			$this->phanhoi->create($input);

			return Redirect::route('phanhois.index');
		}

		return Redirect::route('phanhois.create')
		//return View::make('phanhois.creat')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$phanhois = $this->phanhoi->findOrFail($id);

		return View::make('phanhois.show', compact('phanhois'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$phanhoi = $this->phanhoi->find($id);

		if (is_null($phanhoi))
		{
			return Redirect::route('phanhois.index');
		}

		return View::make('phanhois.edit', compact('phanhoi'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Phanhoi::$rules);

		if ($validation->passes())
		{
			$phanhoi = $this->phanhoi->find($id);
			$phanhoi->update($input);

			return Redirect::route('phanhois.show', $id);
		}

		return Redirect::route('phanhois.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->phanhoi->find($id)->delete();

		return Redirect::route('phanhois.index');
	}

}
