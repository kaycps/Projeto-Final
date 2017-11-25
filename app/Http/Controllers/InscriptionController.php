<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
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
            $inscription = Inscription::where('pago', 'LIKE', "%$keyword%")
                ->orWhere('dataPagamento', 'LIKE', "%$keyword%")
                ->orWhere('dataInscrição', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $inscription = Inscription::paginate($perPage);
        }

        return view('inscription.index', compact('inscription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('inscription.create');
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
        
        Inscription::create($requestData);

        return redirect('inscription')->with('flash_message', 'Inscription added!');
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
        $inscription = Inscription::findOrFail($id);

        return view('inscription.show', compact('inscription'));
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
        $inscription = Inscription::findOrFail($id);

        return view('inscription.edit', compact('inscription'));
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
        
        $inscription = Inscription::findOrFail($id);
        $inscription->update($requestData);

        return redirect('inscription')->with('flash_message', 'Inscription updated!');
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
        Inscription::destroy($id);

        return redirect('inscription')->with('flash_message', 'Inscription deleted!');
    }
}
