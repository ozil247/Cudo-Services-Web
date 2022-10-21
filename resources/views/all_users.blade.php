@extends('layouts.admindash')

@section('content')

<div id="Upcoming" class="tab-pane active">
    <div class="sf-tabs-content">
        <div class="sf-bs-data-table">
            <div class="table-responsive">
                <table class="table table-striped table-bordered example-dt-table aon-booking-table" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                <div class="checkbox sf-radio-checkbox">
                                    <input id="th1_1" name="abc" value="five" type="radio">

                                </div>
                            </th>
                            <th>All Users</th>


                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="checkbox sf-radio-checkbox">
                                    <input id="td2_2" name="abc" value="five" type="radio">
                                    <label for="td2_2"></label>
                                </div>



                            <td>
                                <div class="sf-booking-info-col">
                                    <table style="width:100%">
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th></th>
                                        </tr>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at->format('M:d:Y  h:i ') }}
                                                </td>

                                            </tr>

                                        @endforeach

                                    </table>

                                </div>
                            </td>


                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection
