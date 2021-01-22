<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


use App\User;
use App\Category;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        $departamento = Category::all();

        $Post = Post::all();
  
  //dd($Post);
        return view('PostsPublic.show',compact('Post', 'departamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $departamento = Category::all();



            return view('Posts.create', compact('departamento'));
    
      

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {




    
        
        $Campos=['name' => 'required|string|max:1000',
                'body' => 'required|string|max:100000',
                'category_id' => 'required|integer',

                
                
        
    ];

    $message=["required" =>'El :attribute es requerido'];

    $this->validate($request, $Campos , $message);

    $newPost= new Post;
/*
    if ($request->Hasfile('Foto')){

        $destination_path='public';
        $image=$request->file('Foto');
        $image_name=$image->getClientOriginalName();
        $path=$request->file('Foto')->storeAs('public', $image_name );
        $input['Foto']=$image_name;
        


        $newPost->Foto = $image_name;

       

    }
    
    
*/    
        $category = Category::all();

    
    $newPost->name=$request->name;
    $newPost->body=$request->body;
    $newPost->category_id = $request->category_id; 
    $userId = Auth::id();
    $newPost->user_id=$userId;
    $newPost->save();
    return redirect('verPosts');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        
        $departamento = Category::all();
        
      $id= Auth::id();
      $Post = User::find($id)->post;


//dd($Post);
      return view('Posts.show',compact('Post', 'departamento'));

    }


    public function showPublic($id)
    {
        
    
        $departamento = Category::all();

    $Post = Post::find($id);
  $post_id = $Post->category_id;

  $Posts = Category::find($post_id)->post;

      $PostNext = Post::find($id + 1);
      $PostBefore = Post::find($id - 1);
      $link = Storage::path($Post->Foto);
      
     return view('PostsPublic.Post', compact('Post','PostNext','PostBefore','link', 'Posts' ));


    }


    public function showPublicDepartamento(Request $request)
    {
        $departamento = Category::all();

        $id= $request->input('category_id');
        $Post = Category::find($id)->post;
      
        return view('PostsPublic.show',compact('Post', 'departamento'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamento = Category::all();

        $Post= Post::findorFail($id);

        return view('Posts.edit',compact('Post', 'departamento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $datosPost = request()->except(['_token','_method']);

        if ($request->hasFile('Foto')){

$Post= Post::findorFail($id);


            Storage::delete('images/posts/', $Post->Foto);

            
            $datosPost['Foto']=$request->file('Foto')->storeAs('images\posts', $Post->Foto);

            $datosPost['Foto'] = $Post->Foto ;


        }


      

        Post::where('id', '=', $id)->update($datosPost);

        return redirect('VerPosts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request , $id)
    
    {
        $datosPost = request()->except(['_token','_method']);
        
        if ($request->hasFile('Foto')){

            $Post= Post::findorFail($id);
            
                        
            
                        Storage::delete('images/posts/', $Post->Foto);
            
                            
                       
            
                    }
        Post::destroy($id);
        return redirect('VerPosts');
    }
}
