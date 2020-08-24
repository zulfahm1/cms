<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Artikel;
use App\Model\User;
use App\Model\Category;


class ArtikelController extends Controller
{   
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {   
        
        $this->model = new Artikel();
        $this->imgPath = public_path('img');
    }
    public function index()
    {
        $data_artikel = Artikel::all();
        return view('artikel.index', ['data_artikel' => $data_artikel ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = Category::all();
        $user = User::all();
        return view('artikel.create',compact('user','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->photo_file) {
            $gambar = $this->uploadImage($request);
        }
        $artikel = new Artikel();
        $artikel->category_id = $request->category_id;
        $artikel->user_id = $request->user_id;
        $artikel->title = $request->title;
        $artikel->content = $request->content;
        $artikel->image = $gambar;

        
        $artikel->save();
        return redirect('/admin/artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $category = Category::all();
        $user = User::all();
        return view('artikel.edit', compact('artikel','category','user'));
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
        $artikel =  Artikel::find($id);
        $artikel->category_id = $request->category_id;
        $artikel->user_id = $request->user_id;
        $artikel->title = $request->title;
        $artikel->content = $request->content;
        $artikel->image = $request->image;
        $artikel->save();

        return redirect('/admin/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete($artikel);
        return redirect('/admin/artikel');
    }
    public function uploadImage($request)
    {
        $img = $request->file('photo_file');
        $newName = time() .'.' .$img->getClientOriginalExtension();

        $img->move($this->imgPath, $newName);
       
        return $newName;
    }
    
    public function removeImage($img)
    {
        $fullPath = $this->imgPath . '/'. $img;

        if ($img && file_exists($fullPath)){
            unlink($fullPath);
        }
    }
}
