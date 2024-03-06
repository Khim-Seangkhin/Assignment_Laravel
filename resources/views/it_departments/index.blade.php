@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h4>It Department List</h4>
                <hr>
                
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Day 1</th>
                                    <th>Days 2</th>
                                    <th>Days 3</th>
                                    <th>Days 4</th>
                                    <th>Days 5</th>
                                    <th>Days 6</th>
                                    <th>Days 7</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- declear variable -->
                                @php
                                    $it = Auth::user()->department=='it';
                                    $team_leader = Auth::user()->role=='team_leader';
                                    $ceo = Auth::user()->role == 'ceo';
                                    $hr = Auth::user()->role == 'hr';
                                @endphp
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->position }}</td>
                                        <!-- Day 1 -->
                                        <td>
                                            @if ($user->day_1 === '1')
                                                <button 
                                                    class="btn btn-primary btn-sm mission-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#mission_request"
                                                    name="day_1"
                                                    {{ $it && $team_leader || $it && $ceo ?'':'disabled' }}
                                                >Mission requested</button>
                                            @elseif($user->day_1 === '0')
                                                <button 
                                                    class="btn btn-danger btn-sm leave-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#leave_requested"
                                                    data-name="leave_requested" 
                                                    name="day_1"
                                                    {{ $it && $team_leader || $it && $hr ?'':'disabled' }}
                                                >Leave requested</button>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 2 -->
                                        <td>
                                            @if ($user->days_2 === '1')
                                                <button 
                                                    class="btn btn-primary btn-sm mission-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#mission_request"
                                                    name="days_2"
                                                    {{ $it && $team_leader || $it && $ceo ?'':'disabled' }}
                                                >Mission requested</button>
                                            @elseif($user->days_2 === '0')
                                                <button 
                                                    class="btn btn-danger btn-sm leave-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#leave_requested" 
                                                    name="days_2"
                                                    {{ $it && $team_leader || $it && $hr ?'':'disabled' }}
                                                >Leave requested</button>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 3 -->
                                        <td>
                                            @if ($user->days_3 === '1')
                                                <button 
                                                    class="btn btn-primary btn-sm mission-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#mission_request"
                                                    name="days_3"
                                                    {{ $it && $team_leader || $it && $ceo ?'':'disabled' }}
                                                >Mission requested</button>
                                            @elseif($user->days_3 === '0')
                                                <button 
                                                    class="btn btn-danger btn-sm leave-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#leave_requested" 
                                                    name="days_3"
                                                    {{ $it && $team_leader || $it && $hr ?'':'disabled' }}
                                                >Leave requested</button>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 4 -->
                                        <td>
                                            @if ($user->days_4 === '1')
                                                <button 
                                                    class="btn btn-primary btn-sm mission-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#mission_request"
                                                    name="days_4"
                                                    {{ $it && $team_leader || $it && $ceo ?'':'disabled' }}
                                                >Mission requested</button>
                                            @elseif($user->days_4 === '0')
                                                <button 
                                                    class="btn btn-danger btn-sm leave-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#leave_requested" 
                                                    name="days_4"
                                                    {{ $it && $team_leader || $it && $hr ?'':'disabled' }}
                                                >Leave requested</button>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 5 -->
                                        <td>
                                            @if ($user->days_5 === '1')
                                                <button 
                                                    class="btn btn-primary btn-sm mission-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#mission_request"
                                                    name="days_5"
                                                    {{ $it && $team_leader || $it && $ceo ?'':'disabled' }}
                                                >Mission requested</button>
                                            @elseif($user->days_5 === '0')
                                                <button 
                                                    class="btn btn-danger btn-sm leave-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#leave_requested"
                                                    name="days_5"
                                                    {{ $it && $team_leader || $it && $hr ?'':'disabled' }}
                                                >Leave requested</button>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 6 -->
                                        <td>
                                            @if ($user->days_6 === '1')
                                                <button 
                                                    class="btn btn-primary btn-sm mission-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#mission_request"
                                                    name="days_6"
                                                    {{ $it && $team_leader || $it && $ceo ?'':'disabled' }}
                                                >Mission requested</button>
                                            @elseif($user->days_6 === '0')
                                                <button 
                                                    class="btn btn-danger btn-sm leave-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#leave_requested"
                                                    name="days_6"
                                                    {{ $it && $team_leader || $it && $hr ?'':'disabled' }}
                                                >Leave requested</button>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 7 -->
                                        <td>
                                            @if ($user->days_7 === '1')
                                                <button 
                                                    class="btn btn-primary btn-sm mission-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#mission_request"
                                                    name="days_7"
                                                    {{ $it && $team_leader || $it && $ceo ?'':'disabled' }}
                                                >Mission requested</button>
                                            @elseif($user->days_7 === '0')
                                                <button 
                                                    class="btn btn-danger btn-sm leave-approve-reject"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#leave_requested"
                                                    name="days_7"
                                                    {{ $it && $team_leader || $it && $hr ?'':'disabled' }}
                                                >Leave requested</button>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
