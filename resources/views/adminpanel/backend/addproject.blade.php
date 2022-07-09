@extends('adminpanel.layout')


@section('title','Add Project')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form action="{{route('myproject.store')}}" method="post" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="project-name">Project Name</label>
                        <input type="text" class="form-control" id="project-name" name="project_name" placeholder="Project Name">
                    </div>
                    <div class="form-group">
                        <label>Project File</label>
                        <input type="file" required name="project_file" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="github">Github Url</label>
                        <input type="text" class="form-control" id="github" name="github" placeholder="Github Url">
                    </div>

                    <div class="form-group">
                        <label>Project Slug</label>
                        <input type="text" name="project_slug" class="form-control" placeholder="Project Slug">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Project Desc</label>
                        <textarea class="form-control" name="project_desc" id="exampleTextarea1" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
