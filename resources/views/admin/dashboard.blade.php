@extends('layouts.admin')
@section('body')
    <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>News</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>Heading</th>
                                    <th>Body</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($news as $item)
                                        <tr>
                                            <td>
                                                {{$item->headline}}
                                            </td>
                                            <td>
                                                <?php echo $item->body; ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-info" href="/admin/edit/news/{{$item->id}}"> Edit</a>
                                                <a class="btn btn-danger" href="/admin/delete/news/{{$item->id}}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Announcements</h5>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>Heading</th>
                                <th>Body</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notice as $item)
                                <tr>
                                    <td>
                                        {{$item->headline}}
                                    </td>
                                    <td>
                                        <?php echo $item->body; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="/admin/edit/notice/{{$item->id}}"> Edit</a>
                                        <a class="btn btn-danger" href="/admin/delete/notice/{{$item->id}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Commitee Members</h5>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Committee</th>
                                <th>Designation</th>
                                <th>University</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($administration as $item)
                                <tr>
                                    <td>
                                        {{$item->name}}
                                    </td>
                                    <td>
                                        <img src="/uploads/images/{{$item->photo}}" style="height: 30px; width: 30px">
                                    </td>
                                    <td>
                                        {{ucwords($item->committee)}}
                                    </td>
                                    <td>
                                        {{ucwords($item->designation)}}
                                    </td>
                                    <td>
                                        {{ucwords($item->university)}}
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="/admin/edit/committee-member/{{$item->id}}">Edit</a>
                                        <a class="btn btn-danger" href="/admin/delete/committee-member/{{$item->id}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

    </script>
    @endsection