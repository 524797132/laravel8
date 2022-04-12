<?php
namespace App\Http\Controllers;

use Qyb\Facades\QybTest;

class TestController extends Controller{
    public function index(){
       QybTest::do();
       QybTest::call();
    }
}
