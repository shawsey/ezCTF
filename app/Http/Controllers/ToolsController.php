<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;

class ToolsController extends Controller
{
	public function index()
	{
		$tools = Tool::all();
		return view('tools.index',['tools' => $tools]);
	}

	public function show(Tool $id)
	{




		    $tool = Tool::find($id);

		return view('tools.show',['tool' => $id]);



	}

	public function create()
	{
		return view('tools.create');
	}

	public function store()
	{

		$tool = new Tool;

		$tool->title = request('title');
		$tool->publisher = request('publisher');
		$tool->description = request('description');
		$tool->category = request('category');
		$tool->os = request('os');

		$tool->save();

	}
}