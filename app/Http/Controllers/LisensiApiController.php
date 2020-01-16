<?php

namespace App\Http\Controllers;

use App\Models\Lisensi;
use Illuminate\Http\Request;

/**
 * Class LisensiApiController
 * @package App\Http\Controllers
 */
class LisensiApiController extends Controller
{
    public function index()
    {
        return Lisensi::all();
    }
 
    public function show($id)
    {
        return Lisensi::find($id);
    }

    public function store(Request $request)
    {
        return Lisensi::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Lisensi = Lisensi::findOrFail($id);
        $Lisensi->update($request->all());

        return $Lisensi;
    }

    public function delete(Request $request, $id)
    {
        $Lisensi = Lisensi::findOrFail($id);
        $Lisensi->delete();

        return 204;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     // $lisensis = Lisensi::latest()->paginate(20);
    //     // return view('lisensi.index', compact('lisensis'))->with('i', (request()->input('page',1) -1) *20);
        
    //     $lisensis = Lisensi::get()->toJson(JSON_PRETTY_PRINT);
    //     return response($lisensis, 200);

    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     $lisensi = new Lisensi();
    //     return view('lisensi.create', compact('lisensi'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     request()->validate(Lisensi::$rules);

    //     $lisensi = Lisensi::create($request->all());

    //     return redirect()->route('lisensis.index')
    //         ->with('success', 'Lisensi created successfully.');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     $lisensi = Lisensi::find($id);

    //     return view('lisensi.show', compact('lisensi'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $lisensi = Lisensi::find($id);

    //     return view('lisensi.edit', compact('lisensi'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request $request
    //  * @param  Lisensi $lisensi
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Lisensi $lisensi)
    // {
    //     request()->validate(Lisensi::$rules);

    //     $lisensi->update($request->all());

    //     return redirect()->route('lisensis.index')
    //         ->with('success', 'Lisensi updated successfully');
    // }

    // /**
    //  * @param int $id
    //  * @return \Illuminate\Http\RedirectResponse
    //  * @throws \Exception
    //  */
    // public function destroy($id)
    // {
    //     $lisensi = Lisensi::find($id)->delete();

    //     return redirect()->route('lisensis.index')
    //         ->with('success', 'Lisensi deleted successfully');
    // }
}
