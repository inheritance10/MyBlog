@extends('adminpanel.layout')


@section('title','My projects')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mt-5">Project List</h4>

                <div class="table-responsive">
                    <table style="color: white" class="table table-striped">
                        <thead>
                        <tr>
                            <th> Project File </th>
                            <th> Project name </th>
                            <th> Project Slug </th>
                            <th> Project Description </th>
                            <th> Github Link </th>
                            <th>  </th>
                            <th>  </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($project as $project_item)
                            <tr id="item-{{$project_item->id}}">
                                <td class="py-1">
                                    <img src="/project_images/{{$project_item->project_file}}" style="width: 150px; height: 150px;" alt="image" />
                                </td>
                                <td> {{$project_item->project_name}} </td>

                                <td> {{$project_item->project_slug}} </td>
                                <td> {{$project_item->project_desc}} </td>
                                <td><a href="">{{$project_item->github}}</a>  </td>
                                <td width="5">
                                    <a style="color: white;" href="javascript:void(0)"><i id="@php echo $project_item->id @endphp" class="fa fa-trash-o"></i></a>
                                </td>
                                <td width="5"><a style="color:#FFFFFF;" href="{{route('myproject.edit',$project_item->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        //sona bakılacak


      /*  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.fa-trash-o').click(function (){
            destroy_id = $(this).attr('id');
            alertify.confirm('Silme işlemini onaylayın!','Bu işlem geri alınamaz',
                function (){
                    $.ajax({
                        type:'DELETE',
                        url: 'myproject'+destroy_id,
                        success:function (msg){
                            if(msg){
                                $('#item-'+destroy_id).remove();//veri silindiğinde ekrandanda syafayı yenilemeden kaldırılmasını sağlar
                                alertify.success('Silme işlemi başarılı');
                            }else{
                                alertify.error('İşlem tamamlanamadı');
                            }
                        }
                    });
                },
                function (){
                    alertify.error('Silme işlemi iptal edildi');
                }
            )
        })
*/



    </script>



@endsection
