<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SpecialNeed;
use Illuminate\Http\Request;

class SpecialNeedController extends Controller
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
            $specialneed = SpecialNeed::where('descrição', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $specialneed = SpecialNeed::paginate($perPage);
        }

        return view('special-need.index', compact('specialneed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('special-need.create');
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
        
        SpecialNeed::create($requestData);

        return redirect('special-need')->with('flash_message', 'SpecialNeed added!');
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
        $specialneed = SpecialNeed::findOrFail($id);

        return view('special-need.show', compact('specialneed'));
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
        $specialneed = SpecialNeed::findOrFail($id);

        return view('special-need.edit', compact('specialneed'));
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
        
        $specialneed = SpecialNeed::findOrFail($id);
        $specialneed->update($requestData);

        return redirect('special-need')->with('flash_message', 'SpecialNeed updated!');
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
        SpecialNeed::destroy($id);

        return redirect('special-need')->with('flash_message', 'SpecialNeed deleted!');
    }
}
