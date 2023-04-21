<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddContactRequest;

use App\Models\Contacts;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contacts::orderBy('created_at', 'desc')->get();
        return view('contact', ['row'=>$data]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(AddContactRequest $request)
    {

        $data = [   
            'name'=> $request->name,
            'phone'=> $request->phone,
        ];

        Contacts::create($data);
        return redirect()->route('phone.index');
    }
    public function edit($id)
    {
        $data['row'] = Contacts::find($id);
        // $data['row'] = Contacts::where('id', $id)->first();
        return view('edit', compact('data'));
    }
    public function update(AddContactRequest $request, $id)
    {

        $data = [   
            'name'=> $request->name,
            'phone'=> $request->phone,
        ];

        Contacts::where('id', $id)->update($data);
        return redirect()->route('phone.index');
    }
}
