@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3></h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('staff-dashboard')}}">Home</a></li>

                    <li class="active">Full Client Profile</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <a class="btn btn-primary" href="{{url('staff-client-table')}}"><span class="menu-icon glyphicon glyphicon-chevron-left"></span></a>
                        </div>
                        <div class="panel-body">
                            <div class="container">
                                <div class="main-body">
                                @foreach ($clients as $client)
                                      <div class="row gutters-sm mt-4">
                                        <div class="col-md-4 mb-3">
                                          <div class="card">
                                            <div class="card-body">
                                              <div class="d-flex flex-column align-items-center text-center">
                                                <img src="{{ $client->avatar }}" alt="{{ $client->first_name }}'s Photo" class="rounded-circle" width="150">
                                                <div class="mt-3 align-items-left">
                                                  <h4> {{ $client->first_name }} {{ $client->last_name }}</h4>
                                                  <p class="text-muted font-size-sm">{{ $client->phone }}</p>
                                                  <button class="btn btn-primary">Email</button>
                                                  <button class="btn btn-outline-primary">Message</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card mt-3">
                                            
                                          </div>
                                        </div>
                                        <div class="col-md-8">
                                          <div class="card mb-3">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">First Name</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                  {{ $client->first_name }}
                                                </div>
                                                <hr>
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Last Name</h6>
                                                  </div>
                                                  <div class="col-sm-9 text-secondary">
                                                    {{ $client->last_name }}
                                                  </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{ $client->email }}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Phone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{ $client->phone }}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">ID Number </h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{ $client->id_number }}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Address</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{ $client->address }}
                                                </div>
                                              </div>
                                              <hr>

                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Qualification</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{ $client->qualification }}
                                                </div>
                                              </div>
                                              <hr>


                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Nationality</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{ $client->nationality }}
                                                </div>
                                              </div>
                                              <hr>

                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">State of origin</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{ $client->state_of_origin }}
                                                </div>
                                              </div>
                                              <hr>

                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Local Govenment</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{ $client->lga }}
                                                </div>
                                              </div>
                                              <hr>


                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Disability</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{ $client->disability }}
                                                </div>
                                              </div>
                                              <hr>



                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Gender</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{ $client->gender }}
                                                </div>
                                              </div>
                                              <hr>


                                              <div class="row">
                                                <div class="col-sm-12">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            
                                        </div>
                                      </div>
                            
                                    </div>
                                </div>
                                @endforeach 
                        </div>
                    </div>

                </div>
            </div><!-- Row -->
            <div class="row center-align">

            </div>
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2022 &copy; Abuja Enterprise Agency</p>
        </div>
    </div><!-- Page Inner -->

@endsection