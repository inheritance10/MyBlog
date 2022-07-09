@extends('adminpanel.layout')


@section('title','Update Project')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form action="{{route('myproject.update',$project->id)}}" method="post" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="project-name">Project Name</label>
                        <input type="text" class="form-control" id="project-name" value="{{$project->project_name}}" name="project_name" placeholder="Project Name">
                    </div>
                    <div class="form-group">
                        <label>Project File</label>
                        <input type="file" required name="project_file" class="form-control">
                    </div>

                    @isset($project->project_file)
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12">
                                    <img src="/project_images/{{$project->project_file}}" width="700px;" alt="">
                                </div>
                            </div>
                        </div>
                    @endisset

                    <input type="hidden" name="old_file" value="{{$project->project_file}}">

                    <div class="form-group">
                        <label for="github">Github Url</label>
                        <input type="text" class="form-control" id="github" value="{{$project->github}}" name="github" placeholder="Github Url">
                    </div>

                    <div class="form-group">
                        <label>Project Slug</label>
                        <input type="text" name="project_slug" value="{{$project->project_slug}}" class="form-control" placeholder="Project Slug">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Project Desc</label>
                        <textarea class="form-control" name="project_desc" id="exampleTextarea1" rows="4">{{$project->project_desc}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

