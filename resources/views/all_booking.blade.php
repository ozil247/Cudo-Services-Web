@extends('layouts.admindash')

@section('content')

<div  class="tab-pane active">
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
                            <th>This Vendor bookkings</th>


                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="checkbox sf-radio-checkbox">
                                    <input id="td2_2" name="abc" value="five" type="radio">
                                    <label for="td2_2"></label>
                                </div>
                            </td>

                            <td>
                                <div class="sf-booking-info-col">
                                    <table style="width:100%">
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Customer Phone</th>
                                            <th>Customer Address</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                        </tr>
                                        @foreach($bookings as $booking)

                                            <tr>
                                                <td>{{ $booking->name }}</td>
                                                <td>{{ $booking->phone }}</td>
                                                <td>{{ $booking->address }}</td>
                                                <td>{{ $booking->message }}</td>
                                                <td>{{ $booking->created_at }}</td>
                                            </tr>

                                        @endforeach



                                    </table>

                                </div>
                            </td>
                        </tr>


                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>



@endsection
