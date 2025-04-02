<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Https\Requests;
use App\Models\User;


class HomeController extends Controller {
    public function index(){
        return view('home.homepage');
    }
}
?>