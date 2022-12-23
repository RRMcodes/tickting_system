@extends('layouts.app')
@section('content')



        <div class="pcoded-content">

            <div class="pcoded-inner-content">

                <div class="main-body">
                    <div class="page-wrapper">

                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="{{route('events.create')}}" class="btn btn-primary" action="">Create</a>
                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">

                                                @if (count($events)===0)
                                                    <h4 style="text-align: center;margin: 10%"> Sorry, No Events to show</h4>

                                                @else
                                                <table class="table table-striped table-bordered nowrap" id="myTable">
                                                    <thead>
                                                    <tr>
                                                        <td>Sno</td>
                                                        <td>Name</td>
                                                        <td>type</td>
                                                        <td>start date</td>
                                                        <td>end date</td>
                                                        <td>event details</td>
                                                        <td>quantity</td>
                                                        <td>Actions</td>
                                                    </tr>
                                                    </thead>




                                                </table>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--            {{ $events->links() }}--}}


    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                pageLength: 8,
                ajax : '{{route('events.getEventsJson')}}',
                columns: [
                    { data: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },name: "sn", searchable: false ,orderable:false},
                    {data:"name", name:"name"},
                    {data: "type", name: "type"},
                    {data: "start_date", name: "start_date"},
                    {data: "end_date", name: "end_date"},
                    {data: "details", name: "details"},
                    {data: "quantity", name: "quantity"},


                    { data: function(data,b,c,table) {
                            var buttons = '';
                            buttons += "<a class='btn btn-sm btn-primary'  href='{{route('events.edit',array('id'=>false))}}"+"/"+data.id+"' type='button' title='Edit'><i class='fa fa-edit'></i></a>&nbsp";
                            buttons += "<a class='btn btn-sm btn-primary'  href='{{route('events.show',array('id'=>false))}}"+"/"+data.id+"' type='button' title='Show'> Issue</a>&nbsp";
                            buttons += "<a type='button'  data-id='"+data.id+"' class='btn btn-sm btn-danger del' title='Delete' ><i class='fa fa-trash'></i></a>";
                            return buttons;
                        }, name:'action',searchable: false,orderable: false},
                ]
            });
        } );

        $(document).on('click','.del',function (){
            var id = $(this).data('id');
            alertify.confirm('Delete?', 'Are You Sure you want to delete this record?', function(){	$.get("{{route('events.delete',array('id'=>false))}}"+"/"+id,function (d) {
                    alertify.success("Record Deleted");
                    $('#myTable').DataTable().ajax.reload();
                });}
                , function(){ });
        });

        function edited () {
            alertify.success('Record edited');
        }
    </script>


@endsection
