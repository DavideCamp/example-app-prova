<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortRequest;
use App\Models\ShortUrl;
use illuminate\support\Str;


class ShortUrlController extends Controller
{
    //


    public function short(ShortRequest $request)
    
    {
        # code...
        if(!$request->original_url){

            return;
        }  
        $new_url = new ShortUrl();
        $new_url->original_url = $request->original_url;
        $new_url->short_url = Str::random(10);

           

        if(!$new_url->save()){
            return;     
        }

        return redirect()->back()->with('success_message', 'il tuo url è: <a href="'.url($new_url->short_url).'">' .url($new_url->short_url).'</a>' );
                    
        
            
       

       
    }

    #funzione per controllare se ci sono short url uguali



    public function show($code){
       $short_url = ShortUrl::where('short_url',$code)->first();
       if($short_url){
        return redirect()->to(url($short_url->original_url));
       }
       return redirect()->to(url('/'));
    }
}
  