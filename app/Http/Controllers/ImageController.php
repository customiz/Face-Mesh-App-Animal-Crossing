<?php

namespace App\Http\Controllers;

use App\Image as Image;
use App\Game as Game;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expected = Game::expected(1550, 1450);
        $new_score = Game::loss(1450,$expected);

        //dd($new_score);
        $images = Image::all();
        return view('pages.ANCNH.upload', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = 'img/models';
        if (is_dir($path)) {
            $handle = opendir($path);
            while (($file = readdir($handle)) !== false) {
                if ($file != '.' && $file != '..' && $file != '.DS_Store') {
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    $options = ['jpg', 'png','JPG','PNG'];

                    if(in_array($extension,$options)){
                        $title = str_slug(basename($file,".".$extension));
                        $filename = $file;

                        $image = Image::where('filename','=',$filename)->get();

                        if(count($image) == 0){
                            Image::create([
                                'title'=>$title,
                                'filename'=>$filename
                            ]);
                        }
                        else{
                           
                            //return redirect()->back()->with('error', $image->first()->$filename+' already exit ');
                            continue;
                            
                        }
                    }

                }
            }
            closedir($handle);
            return redirect()->back()->with('success', 'Images loaded.');
        } else {
            return redirect()->back()->with('error', 'Images directory not found.');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
