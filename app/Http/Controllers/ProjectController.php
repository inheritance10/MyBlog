<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::all();
        return view('adminpanel.backend.listproject',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.backend.addproject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          if(strlen($request->project)>3){
              $slug = Str::slug($request->project_slug);
          }else{
              $slug = Str::slug($request->project_name);
          }

          if($request->hasFile('project_file')){
              $request->validate([
                  'project_file' =>  'required|image|mimes:jpg,jpeg,png|max:2048',
                  'project_name' => 'required',
                  'project_desc' => 'required'
              ]);

              $file_name = uniqid().".".$request->project_file->getClientOriginalExtension();
              $request->project_file->move(public_path('/project_images'),$file_name);

          }
          else{
              $file_name = null;
          }

          $project = Project::create([
             'project_file' => $file_name,
              'project_name' => $request->project_name,
              'project_slug' => $slug,
              'project_desc' => $request->project_desc,
              'github' => $request->github
          ]);

          if($project){
              return redirect(route('myproject.index'))->with('success','Proje kaydı başarılı');
          }

          return back()->with('error','Kayıt işlemi başarısız');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::where('id',$id)->first();
        return view('adminpanel.backend.updateproject',compact('project'));
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
        if(strlen($request->project)>3){
            $slug = Str::slug($request->project_slug);
        }else{
            $slug = Str::slug($request->project_name);
        }

         $project = Project::find($id);

         if($request->hasFile('project_file')){
             $request->validate([
                 'project_file' =>  'required|image|mimes:jpg,jpeg,png|max:2048',
                 'project_name' => 'required',
                 'project_desc' => 'required'
             ]);


             $file_name = uniqid().".".$request->project_file->getClientOriginalExtension();
             $request->project_file->move(public_path('project_images/'),$file_name);

             $project->update([
                 'project_file' => $file_name,
                 'project_name' => $request->project_name,
                 'project_slug' => $slug,
                 'project_desc' => $request->project_desc,
                 'github' => $request->github
             ]);

             $path = 'images/blogs/'.$request->old_file;//burada resim güncellendikten sonra önceki resim var ise o resmin silinmesini sağlar.
             if(file_exists($path)){
                 @unlink(public_path($path));//unlink silmeyi sağlar
             }
         }else{
             $project->update([
                 'project_name' => $request->project_name,
                 'project_slug' => $slug,
                 'project_desc' => $request->project_desc,
                 'github' => $request->github
             ]);
         }

        if($project){
            return redirect(route('myproject.index'))->with('success','Düzenleme işlemi başarılı');
        }
        return back()->with('error','Düzenleme işlemi başarısız');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find(intval($id));

        if($project->delete()){
            echo 1;
        }else{
            echo 0;
        }
    }
}
