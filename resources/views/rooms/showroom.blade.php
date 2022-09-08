@extends('layouts.main',['activePage' => 'Boardroom', 'titlePage' => 'Reservation Details ']))
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                             <h4 class="card-title">Reservations</h4>
                            <p class="card-category">Detailed view of reservations ... USER: [  {{$room->username}}  ]</p>
                            </div>
                            <!-- BODY -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                     <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                        <div class="author">
                                            <a herf="">
                                            <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                                                <h5 class="title mt-3">{{ $room->username}}</h5>
                                            </a>
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th>NumResevation: </th>                          
                                                        <td>{{ $room->id }}                         
                                                    </td>                       
                                                </tr>                       
                                                <tr>                         
                                                <th>Username:</th>                          
                                                <td>{{ $room->username }}</td>                       
                                            </tr>                        
                                            <tr>                         
                                            <th>Room Type</th>                          
                                            <td><span class="badge badge-primary">{{ $room->roomtype }}</span></td>                       
                                        </tr>                        
                                        <tr>                          
                                        <th>Reservation Date:</th>                         
                                        <td>{!! $room->reservdate !!}</td>                      
                                    </tr>
                                    <tr>
                                    <th>Entry Time:</th>
                                    <td>{{ $room->start_time }}
                                    </td>
                                    </tr>
                                    <tr>
                                    <th>Departure Time:</th>
                                    <td>{{ $room->endtime }}
                                    </td>                        
                                    </tr>
                                    <tr>
                                    <th>State of the boardroom:</th>
                                    <td>{{ $room->state }}
                                    </td>                      
                                    </tr>
                                    <tr>
                                    <th>Time at which the reservation was made:</th>
                                    <td>{{ $room->created_at }}
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>       
                                        </div>
                                        </p>
                                        <div class="card-description">
                                            RESERVATION. 
                                        </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <button class="btn btn-sm btn-primary">Edit</button>
                                            </div>
                                        </div>
                                     </div>
                                    </div><!-- end card body user -->
                                    <!-- card body user 2 -->
                                    <div class="col-md-6">
                                     <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                        <div class="author">
                                            <a herf="">
                                            <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                                                <h5 class="title mt-3">{{ $room->username}}</h5>
                                            </a>

                                        <div class="card-description">
                                            RESERVATION. 
                                        </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('rooms.indexroom')}}" class = "btn btn-sm btn-success mr-3">Volver</a>
                                            </div>
                                        </div>
                                     </div>
                                    </div><!-- end card body user 2-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection