@extends('layouts.main',['activePage' => 'Boardroom', 'titlePage' => 'Boardroom']))
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                             <h4 class="card-title"> Reservation</h4>
                            <p class="card-category">Room Reservations</p>
                            </div>
                            <div class="card-body">
                            @if(session('success'))
                             <div class="alert alert-success" role="success">
                                 {{ session('success') }}
                             </div> 
                         @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('rooms.createroom')}}" class="btn btn-sm btn-facebook">Make Reservation</a>
                                    </div>
                                </div>
                            <div class="table-responsive">
                            <table class="table">
                               <thead class="text-primary">
                                <th>NReservation</th>
                                <th>Username</th>
                                <th>Room Type</th>
                                <th>Reservation Date</th>
                                <th>Meeting Start Time</th>
                                <th>End Of The Meeting</th>
                                <th>Room State</th>
                                <th>Updated_at</th>
                                <th>Created_at</th>
                                <th class="text-right">Accions Reservations </th>
                               </thead>
                               <tbody>
                                @foreach ($room as $Boardroom)
                                <tr>
                                    <td>{{$Boardroom->id}}</td>
                                    <td>{{$Boardroom->username}}</td>
                                    <td>{{$Boardroom->roomtype}}</td>
                                    <td>{{$Boardroom->reservdate}}</td>
                                    <td>{{$Boardroom->start_time}}</td>
                                    <td>{{$Boardroom->endtime}}</td>
                                    <td>{{$Boardroom->state}}</td>
                                    <td>{{$Boardroom->updated_at}}</td>
                                    <td>{{$Boardroom->created_at}}</td> 
                                    <td class="td-actions text-right">
                                    <!-- edit, delete, close buttons -->
                                <a href="{{route ('rooms.showroom', $Boardroom->id)}}" class="btn btn-info"style='width:30px; height:30px'><i class="material-icons">person</i></a>
                                <a href="{{route ('rooms.editroom', $Boardroom->id)}}" class="btn btn-warning"style='width:30px; height:30px'><i class="material-icons">edit</i></a>
                                <button class="btn btn-danger" type="button"style='width:30px; height:30px'>
                                    <i class="material-icons">close</i>
                                </button>
                                <!-- end of edit, delete, close buttons -->
                                    </td>
                                </tr>
                                @endforeach
                               </tbody>
                               </table>
                            </div>
                            </div>
                            <div class="card-footer ml-auto">
                            {{ $room->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection