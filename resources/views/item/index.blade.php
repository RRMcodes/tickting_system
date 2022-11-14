@extends('layouts.app')
@section('content')
    <main>

        <div style="position: fixed; bottom: 0; right: 0;" x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">

            @if(Session::has('message'))
                <div id="alert" class="alert alert-success">
                    {{Session::get('message')}}
                    <button style="float: right; margin-left: 50px" type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

        </div>

        @if (count($items)===0)
            <h4 style="text-align: center;margin: 10%" >Sorry, No items to show</h4>
        @else

            <div class="pcoded-content">

            <div class="pcoded-inner-content">

                <div class="main-body">
                    <div class="page-wrapper">

                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="{{route('items.create')}}" class="btn btn-primary" action="">Create</a>
                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table class="table table-striped table-bordered nowrap" id="myTable">
                                                    <thead>
                                                    <tr>
                                                        <td>Sno</td>
                                                        <td>Name</td>
                                                        <td>Manufacturer</td>
                                                        <td>Image</td>
                                                        <td>Manufacturer Date</td>
                                                        <td>Actions</td>
                                                    </tr>
                                                    </thead>

                                                 </table>
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
{{--            {{ $items->links() }}--}}
        @endif
    </main>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                pageLength: 8,
                ajax : '{{route('items.getItemsJson')}}',
                columns: [
                    { data: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },name: "sn", searchable: false ,orderable:false},
                    {data: "name", name: "name"},
                    {data: "manufacturer", name: "manufacturer"},
                    {data: "image_name", name: "image_name"},
                    {data: "manufactured_date", name: "manufactured_date"},

                    { data: function(data,b,c,table) {
                            var buttons = '';
                            buttons += "<a class='btn btn-sm btn-primary'  href='{{route('items.edit',array('id'=>false))}}"+"/"+data.id+"' type='button' title='Edit'><i class='fa fa-edit'></i></a>&nbsp";
                            buttons += "<a type='button'  data-id='"+data.id+"' class='btn btn-sm btn-danger del' title='Delete' ><i class='fa fa-trash'></i></a>";
                            return buttons;
                        }, name:'action',searchable: false,orderable: false},
                ]
            });
        } );

        $(document).on('click','.del',function (){
            var id = $(this).data('id');
            alertify.confirm('Delete?', 'Are You Sure you want to delete this record?', function(){	$.get("{{route('items.delete',array('id'=>false))}}"+"/"+id,function (d) {
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
