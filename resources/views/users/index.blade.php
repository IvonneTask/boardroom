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
                         <!-- Message -->
                         @if(session('success'))
                             <div class="alert alert-success" role="success">
                                 {{ session('success') }}
                             </div> 
                         @endif
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

                               <!-- edit, delete, close buttons -->
                              <td class="td-actions text-right">
                                <button class="btn btn-info" type="button">
                                    <i class="material-icons">person</i>
                                </button>
                                <button class="btn btn-warning" type="button">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button class="btn btn-danger" type="button">
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