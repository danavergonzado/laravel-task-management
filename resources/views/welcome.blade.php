@extends('layouts.app')

@section('content')
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Dan Avergonzado</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Running Tasks</b> <a class="float-right">12</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Start Test</b></a>
                <a href="#" class="btn btn-warning btn-block"><b>Goto Break</b></a>
                <a href="#" class="btn btn-danger btn-block"><b>Log Out</b></a>
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
                  <li class="nav-item"><a class="nav-link" href="#members" data-toggle="tab">Team Members</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tasks" data-toggle="tab">Tasks</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="description">Shared publicly - 7:30 PM today</span>
                            <p style="margin-left:50px">Redesign Web to match Laravel version</p>
                      </div>

                      <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="description">Shared publicly - 7:30 PM today</span>
                            <p style="margin-left:50px">Redesign Web to match Laravel version</p>
                      </div>
                      
                    </div>

                    
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->


                  <div class="tab-pane" id="members">
                    <!-- The timeline -->
                 
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="tasks">
                 
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
