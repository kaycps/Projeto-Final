<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Adress;
use Illuminate\Http\Request;

class AdressController extends Controller
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
            $adress = Adress::where('Rua', 'LIKE', "%$keyword%")
                ->orWhere('numeroEndereço', 'LIKE', "%$keyword%")
                ->orWhere('cep', 'LIKE', "%$keyword%")
                ->orWhere('bairro', 'LIKE', "%$keyword%")
                ->orWhere('complemento', 'LIKE', "%$keyword%")
                ->orWhere('cidade', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('paris', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $adress = Adress::paginate($perPage);
        }

        return view('adress.index', compact('adress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('adress.create');
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
        
        Adress::create($requestData);

        return redirect('adress')->with('flash_message', 'Adress added!');
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
        $adress = Adress::findOrFail($id);

        return view('adress.show', compact('adress'));
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
        $adress = Adress::findOrFail($id);

        return view('adress.edit', compact('adress'));
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
        
        $adress = Adress::findOrFail($id);
        $adress->update($requestData);

        return redirect('adress')->with('flash_message', 'Adress updated!');
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
        Adress::destroy($id);

        return redirect('adress')->with('flash_message', 'Adress deleted!');
    }
}
