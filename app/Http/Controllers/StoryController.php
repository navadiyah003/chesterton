<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
// use Share;

class StoryController extends Controller
{
    public function index(Request $request)
    {
        $stories = Story::latest()->paginate(6);
        if ($request->data) {
            $tabSearch = Story::where('stories_type', 'like', $request->data)->paginate(6);
            // dd($tabSearch);
            $typeSearch = "";
            foreach ($tabSearch as $story) {
            $typeSearch .= '
                <div class="col-lg-4 col-sm-6">
                    <a href="'.url("/stories-detail", $story->id).'" class="read-our-story-block">
                        <span class="read-our-story-block-img">
                            <img src="admin/uploads/story/main_image/'.$story->main_image.'" alt="" style="height: 245px;" />
                        </span>
                        <!--read-our-story-block-img-->
                        <h6>'.$story->stories_type.'</h6>
                        <p>'.$story->short_description.'</p>
                        <label>'.date_format($story->created_at, "F d, Y").'</label>
                    </a>
                    <!--read-our-story-block-->
                </div>
            ';
            };
            return response()->json([
                'typeSearch' => $typeSearch, 
            ]);
        }
        // dd($output);
        return view('stories-listing', compact('stories'));
    }

    public function stories_detail($id)
    {
        // $story_detail = Story :: find($id);
        // $sharebuttons = Share::page(
        //         url('stories-detail',$story_detail->id),
        //         'Your share text comes here',
        //     )
        //     ->facebook()
        //     // ->instagram()
        //     // ->messenger()
        //     // ->email()
        //     ->getRawLinks();
            // dd($sharebuttons);
        // return view('stories-detail');
        $story = Story::find($id);
        return view('stories-detail', compact('story'));
    }
}
