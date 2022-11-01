<?php



namespace App\Http\Controllers;

use App\Models\Bateria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class BateriaController extends Controller
{
    public function CadastroBateria()
    {

        return view('cadastrarBateria');
    }

    public function EditarBateria(Request $request)
    {
        $dadosBateria = Bateria::query();
        $dadosBateria->when($request->marca, function ($query, $vl) {
            $query->where('marca', 'like', '%' . $vl . '%');
        });


        $dadosBateria = $dadosBateria->get();

        //dd($dadosBateria);
        return view('editarBateria', [
            'registrosBateria' => $dadosBateria
        ]);
    }

    public function SalvarBancoBateria(Request $request)
    {
        $dadosBateria = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);




        Bateria::create($dadosBateria);
        return Redirect::route('home');
    }


    public function ApagarBancoBateria(Bateria $registrosBaterias)
    {

        $registrosBaterias->delete();
        //Bateria::findOrFail($id)->delete();
        //$bateria->delete();

        return Redirect::route('editar-bateria');
    }


    public function AlterarBateria(Bateria $registrosBaterias)
    {
        return view('alterarBateria', ['registrosBaterias' => $registrosBaterias]);
    }

    public function AlterarBancoBateria(Bateria $registrosBaterias, Request $request)
    {
        $banco = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);

        $registrosBaterias->fill($banco);
        $registrosBaterias->save();

        return Redirect::route('editar-bateria');
    }
}
