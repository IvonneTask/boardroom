@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Users'])
@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
               <div class="row">
                <div class="col-md-12">
                   <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Users</h4>
                      <p class="card-category">Registered Users </p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route ('users.create')}}" class="btn btn-sm btn-facebook">Add User</a>
                            </div>
                        </div>
                       <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                               <th>ID</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Username</th>
                               <th>Created_at</th>
                               <th class="text-right">Actions</th> 
                            </thead>
                            <tbody>
                              @foreach ($users as $user)  
                              <tr>
                              <td>{{ $user->id }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->username }}</td>
                              <td>{{ $user->created_at }}</td>
                              <td></td>
                              </tr>
                              @endforeach  
                            </tbody>
                            </table>
                       </div>
                    </div>
                    <div class="card-footer ml-auto">
                        {{ $users->links() }}
                    </div>
                   </div> 
                </div>
               </div> 
            </div>
        </div>
    </div>
 </div>
 @endsection