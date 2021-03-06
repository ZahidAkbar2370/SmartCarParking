@extends("Admin.admin_layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Parkings</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <a href="{{url('create-parking-center')}}"><button class="btn btn-primary">Add Parking Center</button></a> -->
                            
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Customer Name</th>
                                                    <th>Service Name</th>
                                                    <th>Parking Center</th>
                                                    <th>Pickup Location</th>
                                                    <th>Drop Location</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($allParkings))
                                                @foreach($allParkings as $parking)
                                                <tr>
                                                    <td>{{$parking["customers"]->name}}</td>
                                                    <td>
                                                        @if($parking["services"])
                                                        @foreach($parking["services"] as $customer_service)
                                                        @foreach($all_services as $services)
                                                            @if($customer_service->service_id == $services->id)
                                                            {{$services->service_name}}
                                                            @endif
                                                        @endforeach
                                                        @endforeach
                                                        @endif
                                                    </td>
                                                    <td>{{$parking["parkingCenters"]->parking_center_name}}</td>
                                                    <td>{{$parking->pickup_address}}</td>
                                                    <td>{{$parking->drop_address}}</td>
                                                    <td>{{$parking->start_data}}</td>
                                                    <td>{{$parking->end_date}}</td>
                                                    <td>{{$parking->status}}</td>
                                                    <td>
                                                        <a href="bill/{{$parking->id}}" class="btn btn-success" style="margin-right:5px">Invoice</a>
                                                        <a href="view-bill/{{$parking->id}}" class="btn btn-info" target="_blank" style="margin-left:5px">Show</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>


@endsection