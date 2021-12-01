<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursosController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos/index', compact('cursos'));
    }

    public function create(){
        return view('cursos/create');
    }

    public function store(StoreCurso $request){

       /*$curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save(); */

        $curso = Curso::create($request->all()); //crea el curso y lo salva save()

        return redirect()->route('cursos.show', $curso->id);
    }

    public function edit($id){
        
        $curso = Curso::find($id);

        return view('cursos.edit', compact('curso'));
    }

    public function show($id){

        $curso = Curso::find($id);

        return view('cursos/show', ['curso' => $curso]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);
        
        $curso = Curso::find($id);

        /* $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category; 

        $curso->save(); */

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy($id){
        $curso = Curso::find($id);
        
        $curso->delete();

        return redirect()->route('cursos.index');
    }

    
}
