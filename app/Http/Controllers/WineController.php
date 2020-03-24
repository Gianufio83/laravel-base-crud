<?php

namespace App\Http\Controllers;

use App\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    private $validationShoe = [
        'cantina' => 'required|string|max:60',
        'etichetta' => 'required|string|max:100',
        'vitigno' => 'required|string|max:80',
        'anno' => 'required|max:4',
        'descrizione' => 'required|',
        'prezzo' => 'required|numeric|min:1|max:9999.99'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wines = Wine::all();
      
        return view('wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();

        $request->validate([
            'cantina' => 'required|string|max:60',
            'etichetta' => 'required|string|max:100',
            'vitigno' => 'required|string|max:80',
            'anno' => 'required|max:4',
            'descrizione' => 'required|',
            'prezzo' => 'required|numeric|min:1|max:9999.99'
        ]);

        $wine = new Wine;

        // $wine->cantina = $data['cantina'];
        // $wine->etichetta = $data['etichetta'];
        // $wine->vitigno = $data['vitigno'];
        // $wine->anno = $data['anno'];
        // $wine->descrizione = $data['descrizione'];
        // $wine->prezzo = $data['prezzo'];

        $wine->fill($data);

        $saved= $wine->save();

        if ($saved==true) {
             $wine = Wine::orderBy('id','desc')->first();
            return redirect()->route('wines.show', $wine);
        }
        dd('Non salvato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        if (empty($wine)) {
            abort('404');
        }

        return view('wines.show', compact('wine'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit()
    {
    //     if (empty($wine)) {
    //         abort('404');
    //     }

    //     return view('wines.create', compact('wine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
     {
    //     $shoe = Shoe::find($id);
    //     if(empty($shoe)) {
    //         abort('404');
    //     }

    //     $data = $request->all();
    //     $request->validate($this->validationShoe);
    //     $updated = $shoe->update($data);
    //     if ($updated) {
    //         $shoe = Shoe::find($id);
    //         return redirect()->route('shoes.show', compact('shoe'));
    //     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function destroy()
    {
        // $id = $shoe->id;
        // $deleted = $shoe->delete();
        // $data = [
        //     'id' => $id,
        //     'shoes' => Shoe::all()
        // ];

        // return view('shoes.index', $data);
    }
}
