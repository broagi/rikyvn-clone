<?php

namespace App\Http\Controllers\Portifolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortifolioController extends Controller
{
  public function index() {
    return view('portfolio.index');
  }

  public function view() {
    return view('portfolio.detail');
  }
}
