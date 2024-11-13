<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    //
    //public function movies(){
    //    $movies = DB::select('select * from movies_tale');
    //    return view('movies',["movies"=>$movies]);
    //}

    public function allmovies(){
        $movies = Movie::all();
        return response()->json($movies);
    }

    public function movieid($id){
        try{
            $movie = Movie::findOrFail($id);
            return response()->json($movie,200);
        }catch (\Exception $e){
            return response()->json(['error'=>'Movie no encontrada'],404);
        }
    }

    public function postmovie(Request $request){
        $items = new Movie();
        $items->title = $request->title;
        $items->synopsis = $request->synopsis;
        $items->year = $request->year;
        $items->cover = $request->cover;

        $items->save();
    }

    public function updatemovie(Request $request,$id){
        try{
            $movie = Movie::findOrFail($id);
            $movie->update(attributes:$request->all());
            return response()-> json(data:['data' => $movie]);
        }catch (\Exception $e){
            return response()->json(['error'=>'Movie no encontrada'],404);
        }
    }

    public function deletemovie(Request $request,$id){
        try{
            $movie = Movie::findOrFail($id);
            $movie->delete();
            return response()-> json(data:['data' => $movie]);
        }catch (\Exception $e){
            return response()->json(['error'=>'Movie no encontrada'],404);
        }
    }
}
