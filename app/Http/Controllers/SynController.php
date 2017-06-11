<?php namespace App\Http\Controllers;

use App\Article;
use App\Delegate;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Request;

class SynController extends Controller {

//SynController initiates the app and login user


    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $article = Article::all();
        $asides = $article->where('section', '2')->random(3);
        $articles = DB::table('articles')->where('section', '1')->orderBy('created_at', 'desc')->get();
        $page = 'home';

        return view('blades.index', compact('articles', 'asides', 'page'));
    }

    public function indexArticleShow($id)
    {
        $art = Article::find($id);
        $id = $art->id;
        $title = $art->title;
        $content = $art->content;
        $article = Article::all();
        $asides = $article->where('section', '2')->random(3);
        return view('blades.index', ['id' => $id,'title' => $title, 'content' => $content, 'asides' => $asides, 'page' => 'home']);
    }

    public function mission()
    {
        $article = Article::all();
        $asides = $article->where('section', '2')->random(3);
        $page = 'mission';
        return view('blades.mission', compact('asides', 'page'));
    }
    public function work()
    {
        $article = Article::all();
        $asides = $article->where('section', '2')->random(3);
        $page = 'work';
        return view('blades.work', compact('asides', 'page'));
    }
    public function stories()
    {
        $article = Article::all();
        $asides = $article->where('section', '2')->random(3);
        $articles = $article->where('section', '2');
        $page = 'stories';
        return view('blades.stories', compact('articles', 'asides', 'page'));
    }

    public function storiesArticleShow($id)
    {
        $art = Article::find($id);
        $article = Article::all();
        $asides = $article->where('section', '2')->random(3);
        $id = $art->id;
        $title = $art->title;
        $content = $art->content;
        return view('blades.stories', ['id' => $id,'title' => $title, 'content' => $content, 'asides' => $asides, 'page' => 'stories']);
    }

    public function conference()
    {
        $page = 'conference';
        return view('blades.conference', compact('page'));
    }

    public function donation()
    {
        $page = 'donation';
        return view('blades.donation', compact('page'));
    }

    public function delegate()
    {
        $page = 'Delegate';
        return view('blades.delegate', compact('page'));
    }

    public function about()
    {
        $article = Article::all();
        $asides = $article->where('section', '2')->random(3);
        $page = 'about';
        return view('blades.about', compact('asides', 'page'));
    }
    public function contact()
    {
        $article = Article::all();
        $asides = $article->where('section', '2')->random(3);
        $page = 'contact';
        return view('blades.contact', compact('asides', 'page'));
    }

    public function store_delegate(){


        $input = Request::all();
        Delegate::create($input);

        $page = 'conference';
        return redirect('/prisonreformconference2015');
    }


}
