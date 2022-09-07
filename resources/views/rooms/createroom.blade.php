@extends('layouts.main', ['activePage' => 'Boardroom', 'titlePage' => 'Boardroom'])
@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('rooms.reservation')}}" method="post" class="form-horizontal">
                    @csrf 
                    <div class="card">
                        <div class="card-header card-header-primary">
                           <h4 class="card-title">Boardroom</h4>
                           <p class="card-category">Reserve your boardroom</p>
                        </div>
                            <!-- Username -->
                        <div class="card-body">
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Username</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="username" placeholder="Enter your Username" autofocus>
                            </div>
                            </div>

                             <!-- Roomtype -->
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Room Type</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="roomtype" placeholder="Enter Livingroom or Boardroom">
                            </div>
                            </div>
                             
                             <!-- Reservation Date -->
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Reservation Date </label>
                            <div class="col-sm-7">
                            <input type="date" class="form-control" name="reservdate" placeholder="Enter your Day Of Reservation ">
                            </div>
                            </div>
                             
                             <!-- Start Time -->
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Meeting Start</label>
                            <div class="col-sm-7">
                            <input type="time" class="form-control" name="start_time" placeholder="Enter your Meeting Start Time">
                            </div>
                            </div>
                            
                              <!-- Endtime -->
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Leave Meeting Room</label>
                            <div class="col-sm-7">
                            <input type="time" class="form-control" name="endtime" placeholder="Enter your Departure Time">
                            </div>
                            </div>

                              <!-- State -->
                            <div class="row">
                            <label for="username" class="col-sm-2 col-form-lable">Room Status</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="state" placeholder="Enter Occupied or Free" autofocus>
                              </div>
                            </div>
                        </div>
                         <!-- Footer -->
               <div class="card-footer ml-auto mr-auto">
               <button type="submit" class="btn btn-primary">Save</button>
               </div>
               <!-- End footer -->
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection
