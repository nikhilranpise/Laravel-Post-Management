<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('posts',['posts' => $posts ]);
    }

    public function add_post()
    {
        return view('add_post');
    }

    public function save_post(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        if( $request->hasFile('post_image')){
            $image = $request->file('post_image');
            $reImage = time().'.'.$image->getClientOriginalExtension();
            $dest = public_path('/post_image');
            $image->move($dest,$reImage);
        }else{
            $reImage = "na";
        }

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $reImage;
        $post->save();

        return redirect('/posts')->with('success','New Post Has Been Added.');
    }

    public function edit_post(Request $request,$id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('edit_post',['post' => $post]);
    }

    public function update_post(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        if( $request->hasFile('post_image')){
            $image = $request->file('post_image');
            $reImage = time().'.'.$image->getClientOriginalExtension();
            $dest = public_path('/post_image');
            $image->move($dest,$reImage);
        }else{
            $reImage = $request->post_image;
        }

        $result =  DB::Table('posts')->where('id',$id)
            ->update(
                        array(
                                'title' =>  $request->title,
                                'description' =>  $request->description,
                                'image' => $reImage
                            )
                        );

        return redirect('/posts')->with('success','Post Has Been Updated.');
    }

    public function delete_post($id)
    {
        DB::Table('posts')->where('id',$id)->delete();
        return redirect('/posts')->with('success','Post Has Been Deleted.');
    }
}
