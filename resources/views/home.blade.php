@extends('layouts.app')
@section('content')
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/avatar5.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                <p class="text-muted text-center">{{ Auth::user()->position }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Running Tasks</b> <a class="float-right">12</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Start Test</b></a>
                <a href="#" class="btn btn-warning btn-block"><b>Goto Break</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#members" data-toggle="tab">Online Team</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tasks" data-toggle="tab">Tasks</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content"  style="min-height:350px; max-height:350px; overflow:auto">

                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">

                      @forelse($tasks as $task)
                      <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/AdminLTELogo.png" alt="user image">
                            <span class="description">{{ $task->created_at->format('m/d/Y h:i:s A') }} - {{ $task->user->username}} on {{ $task->category}}</span>
                            <p style="margin-left:50px">{{ $task->name}}</p>
                      </div>
                      @empty
                        <p>No Activity</p>
                      @endforelse
                    </div>
                    
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->


                  <div class="tab-pane p-0" id="members">
                    <ul class="users-list clearfix">
                      <li>
                        <img src="dist/img/user1-128x128.jpg" alt="User Image" width="90px">
                        <a class="users-list-name" href="#">Alexander Pierce</a>
                        <span class="users-list-date">Today</span>
                      </li>
                      <li>
                        <img src="dist/img/user8-128x128.jpg" alt="User Image" width="90px">
                        <a class="users-list-name" href="#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                      <li>
                        <img src="dist/img/user1-128x128.jpg" alt="User Image" width="90px">
                        <a class="users-list-name" href="#">Alexander Pierce</a>
                        <span class="users-list-date">Today</span>
                      </li>
                      <li>
                        <img src="dist/img/user8-128x128.jpg" alt="User Image" width="90px">
                        <a class="users-list-name" href="#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                      <li>
                        <img src="dist/img/user1-128x128.jpg" alt="User Image" width="90px">
                        <a class="users-list-name" href="#">Alexander Pierce</a>
                        <span class="users-list-date">Today</span>
                      </li>
                      <li>
                        <img src="dist/img/user8-128x128.jpg" alt="User Image" width="90px">
                        <a class="users-list-name" href="#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                    </ul>
                  </div> <!-- / end of members tab -->
                 

                  <div class="tab-pane" id="tasks">
                 Task here
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
