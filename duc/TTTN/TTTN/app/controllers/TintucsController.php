<?php

class TintucsController extends BaseController {

	/**
	 * Tintuc Repository
	 *
	 * @var Tintuc
	 */
	protected $tintuc;

	public function __construct(Tintuc $tintuc)
	{
		$this->tintuc = $tintuc;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tintucs = $this->tintuc->all();

		return View::make('tintucs.index', compact('tintucs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tintucs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Tintuc::$rules);

		if ($validation->passes())
		{
			$this->tintuc->create($input);

			return Redirect::route('tintucs.index');
		}

		return Redirect::route('tintucs.create')
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
		$tintuc = $this->tintuc->findOrFail($id);

		return View::make('tintucs.show', compact('tintuc'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tintuc = $this->tintuc->find($id);

		if (is_null($tintuc))
		{
			return Redirect::route('tintucs.index');
		}

		return View::make('tintucs.edit', compact('tintuc'));
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
		$validation = Validator::make($input, Tintuc::$rules);

		if ($validation->passes())
		{
			$tintuc = $this->tintuc->find($id);
			$tintuc->update($input);

			return Redirect::route('tintucs.show', $id);
		}

		return Redirect::route('tintucs.edit', $id)
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
		$this->tintuc->find($id)->delete();

		return Redirect::route('tintucs.index');
	}

}
