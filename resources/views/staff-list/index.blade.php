@extends('layouts.app_staff')@push('css')    <link href="{{ asset('css/appStaffTreeIndex.css') }}" rel="stylesheet" type="text/css">    <link href="{{ asset('css/appListUsers.css') }}" rel="stylesheet" type="text/css">    {{--  Data Table plugin --}}    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">@endpush@section('header')    @include('staff-list.header_staff_list')@endsection@section('content')    <div id="staff_list">        <div class="title">            <div class="alert">                <h2>List all Users with full information</h2>            </div>        </div>        <div class="container">            <div class="row">                <div class="col-md-12">                    <div class="alert">                        <a href="{{ route('staff_list.create') }}" class="btn btn-success">                            <i class="fa fa-plus" aria-hidden="true"></i>                            CREATE USER                        </a>                    </div>                </div>            </div>            <div class="row">                <div class="col-xl-12 col-md-12">                    <div class="app-users-list">                        <table class="nowrap table table-striped table-bordered dataTable" id="myTable">                            <thead class="table-secondary">                            </thead>                            <tbody>                            </tbody>                        </table>                    </div>                </div>            </div>        </div>    </div>@endsection@section('footer')    @include('staff-list.footer_staff_list')@endsection@push('scripts')    {{--  Data Table plugin --}}    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>    <script type="text/javascript" src="{{ asset('js/datatable.js') }}"></script>@endpush