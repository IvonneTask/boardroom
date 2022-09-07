<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Contracts\CreatesBoardroom;

class CreateBoardroom implements CreateBoardroom
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\CreateBoardroom
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255', Rule::unique(User::class),],
        ])->validate();

        return CreateBoardroom::create([
            'reservnumber' => $input['reservnumber'],
            'username' => $input['username'],
            'reservnumber'=> $input['email'],
            'roomtype'=> $input['roomtype'],
            'reservdate'=> $input['reservdate'],
            'start_time'=> $input['starttime'],
            'endtime'=> $input['endtime'],
            'state'=> $input['state'],
        ]);
    }
}
