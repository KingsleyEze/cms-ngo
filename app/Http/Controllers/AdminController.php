<?php namespace App\Http\Controllers;

use App\Article;
use App\Delegate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Support\Facades\DB;

//use Illuminate\Http\Request;

//use Image;
use Request;

class AdminController extends Controller {

    public function dashboard(){

        $articles = DB::table('articles')->orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', ['page' => 'Dashboard', 'articles' => $articles]);
    }

    public function cms(){

        return view('admin.cms', ['page' => 'CMS Interface']);
    }

    public function members(){

        return view('admin.member', ['page' => 'Members']);
    }

    public function delegate(){

        $delegates = Delegate::all();
        $page = 'Delegate';

        return view('admin.delegate', compact('delegates', 'page'));
    }

    public function delegateShow($id)
    {
        $persons = Delegate::find($id);
        $page = 'Delegate';
        return view('admin.delegate', compact('persons', 'page'));
    }

    public function photos(){

        return view('admin.photo', ['page' => 'Photo Manager']);
    }

    public function feedback(){

        return view('admin.feedback', ['page' => 'Feedback']);
    }

    public function login(){

        return view('admin.login', ['page' => 'Feedback']);
    }

    public function store_article(){


        $input = Request::only('title', 'section', 'content');


        $tracker = Article::create($input);
        $insertedId = $tracker->id;
        $desPath = 'pixel/articles/';
        $desSmallPath = 'pixel/articles/';
        $fileName = $insertedId . '.jpg';

        if (Request::hasFile('photo'))
        {
            Request::file('photo')->move($desPath, $fileName);

//            Image::make(Request::file('photo'))->resize(80, 80)->save($desSmallPath . $fileName);
        }

        return redirect('/backoffice/dashboard');
    }

}
