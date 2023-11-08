<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    
    public function index()
    {
       $movies = Movie::all();
       
    return view('movie.index', ['movies' => $movies]);
    }

    public function create()
    {
        
        return view('movie.create');
    }

    public function store(Request $request)
    {
        //1º generar el objeto para guardar
        
        $movie = new Movie($request->all());
        
         
        try{
            //2º intentar guardar el objeto
             $result = $movie->save();
             //3º si se guarda volver algun sitio : index , create
             
             
             $checked = session('afterInsert', 'show movies');
            $target='movie';
        
        if($checked != 'show movies'){
            $target = $target.'/create';
           
        }
             return redirect($target)->with(['message'=> 'The movie has been seaved']);//no hace falta poner url('movie/create') ya que lo hace redirect
        }catch(\Exception $e){
             //4º Si no lo he guardado volver para tras con los datoas rellenos
            return back() -> withInput()->withErrors(['message'=> 'The movie has not been seaved']);//volvemos para atras con los datos que me llegan 
        } 
    }
    public function show(Movie $movie)
    {
       
         return view('movie.show', ['movie' => $movie]);
    }

    public function edit(Movie $movie)
    {
      return view('movie.edit', ['movie' => $movie]);
    }


    public function update(Request $request, Movie $movie)
    {
        try {
             // opcion 1
             $result = $movie -> update ($request -> all());
             // opcion 2
             // $movie -> fill($request -> all());
             // $result = $movie -> save();
             return redirect ('movie') -> with (['message' => 'The movie has been updated']);
        } catch (\Exception $e){
            // dd($e);
            return back() -> withInput() -> withError(['message' => 'The movie has not been saved.']);
        }
    }

    public function destroy(Movie $movie)
    {
        
    }

}