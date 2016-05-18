<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Asset;
use App\Repositories\AssetRepository;
use Illuminate\Http\Request;

class AssetController extends Controller {
    
    protected $asset;

    /**
     * @var PostRepository
     */
    protected $repository;


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(AssetRepository $repository)
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
		$assets = $this->repository->findWhereIn('status', [2,3,4]);
		return view('assets.index', compact('assets'))->with('title', 'Assets');
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
		//$asset = Asset::findOrFail($id);
		$asset = $this->repository->find($id);
		return view('assets.show', compact('asset'))->with('title', 'View Asset');
	}

    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function ajax_show($id)
	{
		//
		//$asset = Asset::findOrFail($id);
		$asset = $this->repository->find($id);
		return view('assets._show', compact('asset'))->with('title', 'View Asset');
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

}
