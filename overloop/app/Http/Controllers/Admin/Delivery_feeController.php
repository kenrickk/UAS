<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Delivery_fee;
use Illuminate\Http\Request;

class Delivery_feeController extends Controller
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
            $delivery_fee = Delivery_fee::where('dikirim_ke', 'LIKE', "%$keyword%")
                ->orWhere('ongkir', 'LIKE', "%$keyword%")
                ->orWhere('estimasi_tiba', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $delivery_fee = Delivery_fee::latest()->paginate($perPage);
        }

        return view('admin.delivery_fee.index',['title' => 'Delivery_fee'], compact('delivery_fee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.delivery_fee.create',['title' => 'Delivery_fee']);
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
        $validated = $request->validate([
            'dikirim_ke' => 'required|max:50',
        ]);
        Delivery_fee::create($requestData);

        return redirect('admin/delivery_fee')->with('flash_message', 'Delivery_fee added!');
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
        $delivery_fee = Delivery_fee::findOrFail($id);

        return view('admin.delivery_fee.show',['title' => 'Delivery_fee'], compact('delivery_fee'));
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
        $delivery_fee = Delivery_fee::findOrFail($id);

        return view('admin.delivery_fee.edit',['title' => 'Delivery_fee'], compact('delivery_fee'));
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
        $validated = $request->validate([
            'dikirim_ke' => 'required|max:50',
        ]);
        $delivery_fee = Delivery_fee::findOrFail($id);
        $delivery_fee->update($requestData);

        return redirect('admin/delivery_fee')->with('flash_message', 'Delivery_fee updated!');
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
        Delivery_fee::destroy($id);

        return redirect('admin/delivery_fee')->with('flash_message', 'Delivery_fee deleted!');
    }
}
