<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
    
        $data = [   
            'name'=> $request->name,
            'phone'=> $request->phone,
        ];

        Contacts::create($data);
        return redirect()->route('çontactLists');
    }
}
