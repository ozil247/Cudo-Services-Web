@extends('layouts.admindash')

@section('content')

<div id="Upcoming" class="tab-pane active">
    <div class="sf-tabs-content">
        <div class="sf-bs-data-table">
            <div class="table-responsive">
                <table  class="table table-striped table-bordered example-dt-table aon-booking-table" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                <div class="checkbox sf-radio-checkbox">
                                    <input id="th1_1" name="abc" value="five" type="radio">

                                </div>
                            </th>
                            <th>All Vendors</th>


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
                                        @foreach ($vendors as $vendor)
                                        <tr>
                                            <td>{{$vendor->name}}</td>
                                            <td>{{$vendor->phone}}</td>
                                            <td>{{$vendor->email}}</td>
                                            <td>{{$vendor->created_at->format('M:d:Y  h:i ')}}</td>
                                            <td>
                                                <div class="btn btn-success">
                                                    <a href="{{route('all.bookings',$vendor->id)}}" class="text-white">
                                                        View All Bookings
                                                    </a>
                                                </div>
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
