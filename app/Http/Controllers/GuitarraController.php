<?php



namespace App\Http\Controllers;

use App\Models\Guitarra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class GuitarraController extends Controller
{
    public function CadastroGuitarra()
    {

        return view('cadastrarGuitarra');
    }

    public function EditarGuitarra(Request $request)
    {
        $dadosGuitarra = Guitarra::query();
        $dadosGuitarra->when($request->marca, function ($query, $vl) {
            $query->where('marca', 'like', '%' . $vl . '%');
        });


        $dadosGuitarra = $dadosGuitarra->get();

        //dd($dadosGuitarra);
        return view('editarGuitarra', [
            'registrosGuitarra' => $dadosGuitarra
        ]);
    }

    public function SalvarBancoGuitarra(Request $request)
    {
        $dadosGuitarra = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);




        Guitarra::create($dadosGuitarra);
        return Redirect::route('home');
    }


    public function ApagarBancoGuitarra(Guitarra $registrosGuitarras)
    {

        $registrosGuitarras->delete();
        //Guitarra::findOrFail($id)->delete();
        //$guitarra->delete();

        return Redirect::route('editar-guitarra');
    }


    public function AlterarGuitarra(Guitarra $registrosGuitarras)
    {
        return view('alterarGuitarra', ['registrosGuitarras' => $registrosGuitarras]);
    }

    public function AlterarBancoGuitarra(Guitarra $registrosGuitarras, Request $request)
    {
        $banco = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);

        $registrosGuitarras->fill($banco);
        $registrosGuitarras->save();

        return Redirect::route('editar-guitarra');
    }
}
