<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use App\Models\Boardroom;
use App\Models\Boardrooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class RoomController extends Controller
{
  public function indexroom()
  {
     $room = Boardroom::paginate(5);
     return view ('rooms.indexroom', compact('room'));
  }
   public function createroom ()
  {
    return view('rooms.createroom');
  }

  public function reservation (Request $request)
  {
      Boardroom::create($request->all());
      return redirect()->route('rooms.indexroom');
      
  }
  public function showroom(Boardroom $room)
  {
      
      
      return view('rooms.showroom', compact('room'));
  }

  public function editroom(Boardroom $room)
  {
    return view ('rooms.editroom', compact('room'));

  }

  public function updateroom(Request $request, $id)
  {
     $room=Boardroom::findOrFail($id);
     $dataroom = $request->only('username','roomtype','reservdate','start_time','endtime','state',);

     $room->update($dataroom);
     return redirect()->route('rooms.indexroom')->with('success','Data edited correctly');
  }
  
}
