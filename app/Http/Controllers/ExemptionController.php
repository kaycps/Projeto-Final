<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Exemption;
use Illuminate\Http\Request;

class ExemptionController extends Controller
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
            $exemption = Exemption::where('homologado', 'LIKE', "%$keyword%")
                ->orWhere('motivo', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $exemption = Exemption::paginate($perPage);
        }

        return view('exemption.index', compact('exemption'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('exemption.create');
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
        
        Exemption::create($requestData);

        return redirect('exemption')->with('flash_message', 'Exemption added!');
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
        $exemption = Exemption::findOrFail($id);

        return view('exemption.show', compact('exemption'));
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
        $exemption = Exemption::findOrFail($id);

        return view('exemption.edit', compact('exemption'));
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
        
        $exemption = Exemption::findOrFail($id);
        $exemption->update($requestData);

        return redirect('exemption')->with('flash_message', 'Exemption updated!');
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
        Exemption::destroy($id);

        return redirect('exemption')->with('flash_message', 'Exemption deleted!');
    }
}
