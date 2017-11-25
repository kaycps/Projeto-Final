<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SelectProcess;
use Illuminate\Http\Request;

class SelectProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $selectprocess = SelectProcess::where('dataInicio', 'LIKE', "%$keyword%")
                ->orWhere('dataFim', 'LIKE', "%$keyword%")
                ->orWhere('ativo', 'LIKE', "%$keyword%")
                ->orWhere('nome', 'LIKE', "%$keyword%")
                ->orWhere('descrição', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $selectprocess = SelectProcess::paginate($perPage);
        }

        return view('select-process.index', compact('selectprocess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('select-process.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        SelectProcess::create($requestData);

        return redirect('select-process')->with('flash_message', 'SelectProcess added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $selectprocess = SelectProcess::findOrFail($id);

        return view('select-process.show', compact('selectprocess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $selectprocess = SelectProcess::findOrFail($id);

        return view('select-process.edit', compact('selectprocess'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $selectprocess = SelectProcess::findOrFail($id);
        $selectprocess->update($requestData);

        return redirect('select-process')->with('flash_message', 'SelectProcess updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        SelectProcess::destroy($id);

        return redirect('select-process')->with('flash_message', 'SelectProcess deleted!');
    }
}
