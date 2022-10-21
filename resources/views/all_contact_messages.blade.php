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
                            <th>All Feedbacks</th>


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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                        </tr>
                                        @foreach($feedbacks as $feedback)

                                            <tr>
                                                <td>{{ $feedback->name }}</td>
                                                <td>{{ $feedback->email }}</td>
                                                <td>{{ $feedback->phone }}</td>
                                                <td>{{ $feedback->subject }}</td>
                                                <td>{{ $feedback->message }}</td>
                                                <td>{{ $feedback->created_at }}</td>
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
