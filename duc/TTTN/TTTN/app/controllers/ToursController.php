<?php

class ToursController extends BaseController {

	/**
	 * Tour Repository
	 *
	 * @var Tour
	 */
	protected $tour;

	public function __construct(Tour $tour)
	{
		$this->tour = $tour;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tours = $this->tour->all();

		return View::make('tours.index', compact('tours'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tours.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Tour::$rules);

		if ($validation->passes())
		{
			$this->tour->create($input);

			return Redirect::route('tours.index');
		}

		return Redirect::route('tours.create')
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
		$tour = $this->tour->findOrFail($id);

		return View::make('tours.show', compact('tour'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tour = $this->tour->find($id);

		if (is_null($tour))
		{
			return Redirect::route('tours.index');
		}

		return View::make('tours.edit', compact('tour'));
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
		$validation = Validator::make($input, Tour::$rules);

		if ($validation->passes())
		{
			$tour = $this->tour->find($id);
			$tour->update($input);

			return Redirect::route('tours.show', $id);
		}

		return Redirect::route('tours.edit', $id)
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
		$this->tour->find($id)->delete();

		return Redirect::route('tours.index');
	}
	public function  TimSanpham(){
		$data=  Input::all();
		if(Input::get('text-search')==1 ){
			$searchtour = DB::table("tours")
				->Where("tentour", "like", "%{$data['text-search']}%")
				->get();
			return View::make("searchtour")->with("tour", $searchtour);

		}
	}

}
