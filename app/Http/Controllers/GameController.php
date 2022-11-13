<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Image as Image;
use App\Game as Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 2;
        $images = Image::orderBy(DB::raw('RAND()'))->take($limit)->get();
        if(count($images)){
            $top10 = Image::orderBy('score','DESC')->take(10)->get();

            return view('pages.ANCNH.game', compact('images','top10'));
        }
        return redirect('images');
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
        $winner = Image::where('id', '=' ,$request->winner)->first();
        $loser = Image::where('id', '=' ,$request->loser)->first();

        $wins = $winner->wins + 1;

        $winner_expected_score= Game::expected($loser->score, $winner->score);
        $winner_new_score= Game::win($winner->score, $winner_expected_score);

        $winner_rank= Game::rank($winner_new_score, $wins, $winner->wins);


        $winner->update([
            'score' => $winner_new_score,
            'wins' => $wins,
            'rank' => $winner_rank,
        ]);


        $losses = $loser->losses + 1;
        $loser_expected_score= Game::expected($winner->score, $loser->score);
        $loser_new_score= Game::loss($loser->score, $loser_expected_score);

        $loser_rank= Game::rank($loser_new_score, $losses, $loser->wins);

        $loser->update([
            'score' => $loser_new_score,
            'losses' => $losses,
            'rank' => $loser_rank,
        ]);

        Game::create([
            'winner' => $request->winner,
            'loser' => $request->loser,
        ]);

        return redirect()->back()->with('success','Scores updated! Contrinue playing.');
        
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
