<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
class CommentController extends Controller
{
    public function index()
    {
        $comments=Home::all();
        return view ('home', compact('comments'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Home::create([
            'comment'=>$request->comment,
            'name'=>$request->name,
       ]);
       return redirect()->route('\home\comment.store');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
