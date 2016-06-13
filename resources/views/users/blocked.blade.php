@extends('pages.layouts.backend')

@section('title', 'Blocked users')

@section('content')

<div class="col-md-10 col-md-offset-1">

    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row">
          <div class="col col-xs-6">
            <h3 class="panel-title">Users</h3>
        </div>

    </div>
</div>
<div class="panel-body">
    <table class="table table-striped table-bordered table-list">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>   
                <th>Admin</th>         
                <th>Registered At</th>

                <th text-align=center><em class="fa fa-cog"></em></th>
            </tr>
        </thead>
        <tbody>