@extends('layouts.main', ['activePage' => 'Reservation', 'titlePage' => 'Edit your Reservation'])
@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('rooms.updateroom', $room->id)}}" method="post" class="form-horizontal">
                    @csrf 
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                           <h4 class="card-title">Boardroom</h4>
                           <p class="card-category">Edit your reservation boardroom</p>
                        </div>
                            <!-- Username -->
                        <div class="card-body">
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Username</label>
                            <div class="col-sm-7">
                            <input type="string" class="form-control" name="username" value="{{ $room->username}}" autofocus>
                            </div>
                            </div>

                             <!-- Roomtype -->
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Room Type</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="roomtype" value="{{ $room->roomtype}}">
                            </div>
                            </div>
                             
                             <!-- Reservation Date -->
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Reservation Date </label>
                            <div class="col-sm-7">
                            <input type="datetime" class="form-control" name="reservdate" value="{{ $room->reservdate }}">
                            </div>
                            </div>
                             
                             <!-- Start Time -->
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Meeting Start</label>
                            <div class="col-sm-7">
                            <input type="time" class="form-control" name="start_time" value="{{ $room->start_time}}">
                            </div>
                            </div>
                            
                              <!-- Endtime -->
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Leave Meeting Room</label>
                            <div class="col-sm-7">
                            <input type="time" class="form-control" name="endtime" value="{{ $room->endtime}}">
                            </div>
                            </div>

                              <!-- State -->
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Room Status</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="state" value="{{ $room->state}}">
                              </div>
                            </div>
                        </div>
                         <!-- Footer -->
               <div class="card-footer ml-auto mr-auto">
               <button type="submit" class="btn btn-primary">Update</button>
               </div>
               <!-- End footer -->
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection
