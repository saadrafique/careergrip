<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Euser;
use DB;
use App\Juser;
use App\Seinfo;
use App\User;
use App\Pinfo;
use App\Post;
use App\Awinfo;
use App\Vrinfo;
use App\Cinfo;
use App\Jinfo;
use App\Langinfo;
use App\Compinfo;
use App\Rpinfo;

class SearchController extends Controller
{
    public function search(Request $request)
{
//dd($request);
 $text = $request->input('search_text');
	//dd($text);
    // Gets the query string from our form submission 
   // $query = Request::input('search');

    // Returns an array of articles that have the query string located somewhere within 
    // our articles titles. Paginates them so we can break up lots of search results.
    $articles = DB::table('jusers')->join('pinfos', 'jusers.id', '=', 'pinfos.pinfoes_id')
                                   ->join('einfos', 'pinfos.id', '=', 'einfos.einfoes_id')
                                   ->join('jinfos', 'pinfos.id', '=', 'jinfos.jinfoes_id')
                                   ->join('rpinfos', 'pinfos.id', '=', 'rpinfos.rpinfoes_id')
                                   ->join('vrinfos', 'pinfos.id', '=', 'vrinfos.vrinfoes_id')
                                   ->join('seinfos', 'pinfos.id', '=', 'seinfos.seinfoes_id')
                                   ->join('awinfos', 'pinfos.id', '=', 'awinfos.awinfoes_id')
                                   ->join('cinfos', 'pinfos.id', '=', 'cinfos.cinfoes_id')
                                   ->join('skinfos', 'pinfos.id', '=', 'skinfos.skinfoes_id')
                                   ->join('lang_infos', 'pinfos.id', '=', 'lang_infos.langinfoes_id')
                                   ->where('jusers.username', 'LIKE', '%' . $text . '%')->paginate(10);
                                 //->where('jusers.username', 'LIKE', '%' . $request . '%')->paginate(10);
                                //->where('jusers.username', 'LIKE', '%' . $request . '%')->paginate(10);
                                 //->where('jusers.username', 'LIKE', '%' . $request . '%')->paginate(10);
                                 //->where('jusers.username', 'LIKE', '%' . $request . '%')->paginate(10);
                                 //->where('jusers.username', 'LIKE', '%' . $request . '%')->paginate(10);
                                 //->where('jusers.username', 'LIKE', '%' . $request . '%')->paginate(10);
        
    // returns a view and passes the view the list of articles and the original query.
    return view('.search', compact('articles'));
 }
}
