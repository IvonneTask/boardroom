@extends('layouts.main', ['activePage'=> 'users', 'titlePage' => 'User New'])
@section('content')
     <div class = "content">
        <div class="container-fluid">
          <div class="row">
           <div class= "col-md-12">
            <form action="{{route('users.lion')}}" method="post" class="form-horizontal">
             @csrf
             <div class="card">
                <div class="card-headre card-header-primary">
                    <h4 class="card-title">Username</h4>
                    <p class="card-category">Data Entry</p>
             </div>
             <div class="card-body">
                             @if($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                              @foreach($errors->all() as $error)
                                   <li>{{ $error}}</li>
                              @endforeach
                            </ul>
                            </div>
                             @endif
                <div class="row">
                    <label for="name" class="col-sm-2 col-form-lable">Name</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control" name="name" placeholder="Enter your Name" autofocus required>
                    </div>
                </div>
                <div class="row">
                    <label for="username" class="col-sm-2 col-form-lable">Username</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control" name="username" placeholder="Enter your Username">
                    </div>
                </div>
                <div class="row">
                    <label for="email" class="col-sm-2 col-form-lable">Email</label>
                    <div class="col-sm-7">
                       <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                    </div>
                </div>
                <div class="row">
                    <label for="password" class="col-sm-2 col-form-lable">Password</label>
                    <div class="col-sm-7">
                       <input type="password" class="form-control" name="password" placeholder="Enter your Password">
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