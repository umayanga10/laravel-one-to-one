@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h3><b>Retrive one passport numbers belong to one customer :</b></h3>
                            <p>Combine customers and passports table </p>
                                   
                                <table class="table table-dark table-striped">
                                    <thead>
                                    <tr>
                                        <th>Customer_ID</th>
                                        <th>Passport Number</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$customer->customer_id}}</td>
                                        <td>{{$customer->number}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
             </div>
        </div>
   </div>
</div>
@endsection
