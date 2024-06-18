<?php

namespace App\Http\Controllers\Portifolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portifolio;


class PortifolioController extends Controller
{
  public function index() {
    $portifolios = Portifolio::orderBy("ordering")->get();
    return view('portfolio.index', ["portifolios" => $portifolios]);
  }

  public function view(Request $request, $id) {
    $portifolio = Portifolio::where('id', $id)->first();
    if (!$portifolio) {
      abort(404);
    }
    return view('portfolio.detail', ["portifolio" => $portifolio]);
  }
}
