<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
}
?>