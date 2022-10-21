@extends('layouts.vendors')

@section('content')

<div  class="tab-pane active">
    <div class="sf-tabs-content">
        <div class="sf-bs-data-table">
            <div class="table-responsive">
                <table class="table table-striped table-bordered example-dt-table aon-booking-table" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                <div>

                                </div>
                            </th>
                            <th>My bookkings</th>


                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div >

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
