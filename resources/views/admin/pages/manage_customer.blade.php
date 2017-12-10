@extends('admin.layout.master')
@section('style')
    {{ HTML::style('bower/datatables.net-bs/css/dataTables.bootstrap.min.css') }}
    {{ HTML::style('css/sites/admin_manage_order.css') }}
@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content-header">
            <h1>
                MANAGER USER
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="{{ route('manage.order') }}">manage user</a></li>
            </ol>
        </section>
        <section class="content" id="manage_drink">
            <hr>
            <div class="row">
                <div id="content">
                    <div id="tab1">
                        <div class="table-responsive status-order" style="border-radius: 10px;">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center weight-title">User No.</th>
                                    <th class="text-center weight-title">User</th>
                                    <th class="text-center weight-title">Date Created</th>
                                    <th class="text-center weight-title">Action</th>
                                </tr>
                                </thead>
                                <?php $i = 1?>
                                @foreach($users as $user)
                                    <tbody id="items">
                                    <td>{{$i++}}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        <a class="orderID" href="">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                    </td>
                                    </tbody>
                                @endforeach
                                <tr></tr>
                            </table>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-4 text-center">
                                    <ul class="pagination" id="myPager"></ul>
                                </div>
                            </div>
                        </div><!--/table-resp-->
                        <hr>
                    </div>
                </div>
            </div><!--/tab-content-->
        </section>
    </div>
@endsection

@section('script')
    {{ HTML::script('bower/datatables.net/js/jquery.dataTables.min.js') }}
    {{ HTML::script('bower/datatables.net-bs/js/dataTables.bootstrap.min.js') }}
    {{ HTML::script('bower/fastclick/lib/fastclick.js') }}
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
    {{ HTML::script('js/admin/manage_drink.js') }}
    {{ HTML::script('js/sites/homepage.js') }}
@endsection
