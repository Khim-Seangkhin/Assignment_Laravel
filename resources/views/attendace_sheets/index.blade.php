@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <h4>Attendace Sheet List</h4>
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
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
                            @php
                                $id = Auth::user()->id;
                                $name = Auth::user()->name;
                                $department = Auth::user()->department;
                                $role = Auth::user()->role;
                            @endphp
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <!-- Days 1 -->
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="day_1{{ $user->id }}"
                                                data-name="day_1" id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->day_1 == '1' || $user->day_1 == 'mission_approved' || $user->day_1 == 'mission_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_mission(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->day_1 == 'mission_rejected' ? 'text-danger' : '' }}"
                                                for="">Mission Request</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="day_1{{ $user->id }}" data-name="day_1"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->day_1 == '0' || $user->day_1 == 'leave_approved' || $user->day_1 == 'leave_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_leave(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->day_1 == 'leave_rejected' ? 'text-danger' : '' }}"
                                                for="">Leave Request</label>
                                        </div>
                                    </td>
                                    <!-- Days 2 -->
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_2{{ $user->id }}" data-name="days_2"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_2 == '1' || $user->days_2 == 'mission_approved' || $user->days_2 == 'mission_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_mission(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_2 == 'mission_rejected' ? 'text-danger' : '' }}"
                                                for="">Mission Request</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_2{{ $user->id }}" data-name="days_2"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_2 == '0' || $user->days_2 == 'leave_approved' || $user->days_2 == 'leave_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_leave(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_2 == 'leave_rejected' ? 'text-danger' : '' }}"
                                                for="">Leave Request</label>
                                        </div>
                                    </td>
                                    <!-- Days 3 -->
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_3{{ $user->id }}" data-name="days_3"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_3 == '1' || $user->days_3 == 'mission_approved' || $user->days_3 == 'mission_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_mission(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_3 == 'mission_rejected' ? 'text-danger' : '' }}"
                                                for="">Mission Request</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_3{{ $user->id }}" data-name="days_3"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_3 == '0' || $user->days_3 == 'leave_approved' || $user->days_3 == 'leave_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_leave(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_3 == 'leave_rejected' ? 'text-danger' : '' }}"
                                                for="">Leave Request</label>
                                        </div>
                                    </td>
                                    <!-- Days 4 -->
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_4{{ $user->id }}" data-name="days_4"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_4 == '1' || $user->days_4 == 'mission_approved' || $user->days_4 == 'mission_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_mission(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_4 == 'mission_rejected' ? 'text-danger' : '' }}"
                                                for="">Mission Request</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_4{{ $user->id }}" data-name="days_4"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_4 == '0' || $user->days_4 == 'leave_approved' || $user->days_4 == 'leave_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_leave(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_4 == 'leave_rejected' ? 'text-danger' : '' }}"
                                                for="">Leave Request</label>
                                        </div>
                                    </td>
                                    <!-- Days 5 -->
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_5{{ $user->id }}" data-name="days_5"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_5 == '1' || $user->days_5 == 'mission_approved' || $user->days_5 == 'mission_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_mission(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_5 == 'mission_rejected' ? 'text-danger' : '' }}"
                                                for="">Mission Request</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_5{{ $user->id }}" data-name="days_5"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_5 == '0' || $user->days_5 == 'leave_approved' || $user->days_5 == 'leave_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_leave(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_5 == 'leave_rejected' ? 'text-danger' : '' }}"
                                                for="">Leave Request</label>
                                        </div>
                                    </td>
                                    <!-- Days 6 -->
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_6{{ $user->id }}" data-name="days_6"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_6 == '1' || $user->days_6 == 'mission_approved' || $user->days_6 == 'mission_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_mission(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_6 == 'mission_rejected' ? 'text-danger' : '' }}"
                                                for="">Mission Request</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_6{{ $user->id }}" data-name="days_6"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_6 == '0' || $user->days_6 == 'leave_approved' || $user->days_6 == 'leave_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_leave(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_6 == 'leave_rejected' ? 'text-danger' : '' }}"
                                                for="">Leave Request</label>
                                        </div>
                                    </td>
                                    <!-- Days 7 -->
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_7{{ $user->id }}" data-name="days_7"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_7 == '1' || $user->days_7 == 'mission_approved' || $user->days_7 == 'mission_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_mission(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_7 == 'mission_rejected' ? 'text-danger' : '' }}"
                                                for="">Mission Request</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="days_7{{ $user->id }}" data-name="days_7"
                                                id="status{{ $user->id }}"
                                                {{ $user->name == $name && $user->id == $id ||$user->department == $department && $role == 'ceo' ? '' : 'disabled' }}
                                                {{ $user->days_7 == '0' || $user->days_7 == 'leave_approved' || $user->days_7 == 'leave_rejected' ? 'checked' : '' }}
                                                onclick="req_or_rem_leave(event.target,{{ $user->id }})">
                                            <label
                                                class="form-check-label {{ $user->days_7 == 'leave_rejected' ? 'text-danger' : '' }}"
                                                for="">Leave Request</label>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
