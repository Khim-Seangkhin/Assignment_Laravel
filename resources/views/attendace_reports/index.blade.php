@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h4>Attendace Report</h4>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
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
                                @foreach ($users as $user)
                                    <tr>
                                        <td style="display: none;">{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <!-- Day 1 -->
                                        <td>
                                            @if ($user->day_1 == 'mission_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" checked>
                                                    <label class="form-check-label" for="">Mission approved</label>
                                                </div>
                                            @elseif ($user->day_1 == 'leave_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input bg-custom" type="radio" checked>
                                                    <label class="form-check-label" for="">Leave approved</label>
                                                </div>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 2 -->
                                        <td>
                                            @if ($user->days_2 == 'mission_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" checked>
                                                    <label class="form-check-label" for="">Mission approved</label>
                                                </div>
                                            @elseif ($user->days_2 == 'leave_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input bg-custom" type="radio" checked>
                                                    <label class="form-check-label" for="">Leave approved</label>
                                                </div>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 3 -->
                                        <td>
                                            @if ($user->days_3 == 'mission_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" checked>
                                                    <label class="form-check-label" for="">Mission approved</label>
                                                </div>
                                            @elseif ($user->days_3 == 'leave_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input bg-custom" type="radio" checked>
                                                    <label class="form-check-label" for="">Leave approved</label>
                                                </div>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 4 -->
                                        <td>
                                            @if ($user->days_4 == 'mission_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" checked>
                                                    <label class="form-check-label" for="">Mission approved</label>
                                                </div>
                                            @elseif ($user->days_4 == 'leave_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input bg-custom" type="radio" checked>
                                                    <label class="form-check-label" for="">Leave approved</label>
                                                </div>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 5 -->
                                        <td>
                                            @if ($user->days_5 == 'mission_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" checked>
                                                    <label class="form-check-label" for="">Mission approved</label>
                                                </div>
                                            @elseif ($user->days_5 == 'leave_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input bg-custom" type="radio" checked>
                                                    <label class="form-check-label" for="">Leave approved</label>
                                                </div>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 6 -->
                                        <td>
                                            @if ($user->days_6 == 'mission_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" checked>
                                                    <label class="form-check-label" for="">Mission approved</label>
                                                </div>
                                            @elseif ($user->days_6 == 'leave_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input bg-custom" type="radio" checked>
                                                    <label class="form-check-label" for="">Leave approved</label>
                                                </div>
                                            @else
                                                !--
                                            @endif
                                        </td>
                                        <!-- Days 7 -->
                                        <td>
                                            @if ($user->days_7 == 'mission_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" checked>
                                                    <label class="form-check-label" for="">Mission approved</label>
                                                </div>
                                            @elseif ($user->days_7 == 'leave_approved')
                                                <div class="form-check">
                                                    <input class="form-check-input bg-custom" type="radio" checked>
                                                    <label class="form-check-label" for="">Leave approved</label>
                                                </div>
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

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function req_or_rem_mission(_this, id) {
            var title = $(_this).data('name');
            var status = $(_this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "get",
                url: "{{ url('/attendace_sheet/mission_request') }}",
                data: {
                    id: id,
                    title: title,
                    status: status,
                },
                dataType: "json",
                success: function(data) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })
                    }
                }
            });
        }

        function req_or_rem_leave(_this, id) {
            var title = $(_this).data('name');
            var status = $(_this).prop('checked') == true ? 0 : 1;
            $.ajax({
                type: "get",
                url: "{{ url('/attendace_sheet/leave_request') }}",
                data: {
                    id: id,
                    title: title,
                    status: status,
                },
                dataType: "json",
                success: function(data) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })
                    }
                }
            });
        }
    </script>
@endsection
