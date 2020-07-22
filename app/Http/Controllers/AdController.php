<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function app1(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://preaf.jp/pa.do?s=v04031&o=47136&guid=ON'); //メガトーク(preaf)へ
        } elseif ((strpos($user_agent, 'Android') !== false)) {
            return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16216'); //トリトモ(fam)へ
        }
    }
    
    public function app2(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://preaf.jp/pa.do?s=v04031&o=47131&guid=ON'); //いいね(preaf)へ
        } elseif ((strpos($user_agent, 'Android') !== false)) {
            return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16216'); //トリトモ(fam)へ
        }
    }
    
    public function app3(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://preaf.jp/pa.do?s=v04031&o=47139&guid=ON'); //友達さがし(preaf)へ
        } elseif ((strpos($user_agent, 'Android') !== false)) {
            return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16216'); //トリトモ(fam)へ
        }
    }
}
