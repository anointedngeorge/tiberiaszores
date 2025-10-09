@extends('dashboards.admin1.layout')


@section('content')

{{-- all modals --}}
@include("dashboards.admin1.modal")



<div class="content-body">
    <div class="container-fluid">
        
        <div class="row page-titles">
            <div class="col-md-6 col-sm-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Booking</a></li>
                    <li class="breadcrumb-item  active"><a href="javascript:void(0)">Booking Listing</a></li>
                </ol>
            </div>

            <div class="col-md-6 col-sm-12 text-right">
                <button 
                    type="button" 
                    class="btn btn-primary btn-xs mb-2" 
                    onclick="loadModalPage();" 
                    data-bs-toggle="modal" 
                    data-bs-target="#pagemodal"
                    data-page="{{ route('booking.create') }}"
                    data-title="Create New Hotel"
                    >Create New Bookings
                </button>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">  
                       
                     
                            @if ($page_table_title)
                                {{ $page_table_title }}
                            @else
                            ...
                            @endif
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                    
                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Booking Code</th>
                                        <th>Guest</th>
                                        <th>Room</th>
                                        <th>Checkin</th>
                                        <th>Checkout</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Attended By</th>
                                        <th>Created-At</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $result)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <th>{{ $result->code }}</th>
                                            <th>{{ $result->guestid->fullname() }}</th>
                                            <th>{{ $result->roomid->name}}</th>
                                            <td>{{ $result->checkin }}</td>
                                            <td>{{ $result->checkout }}</td>
                                            <td>{{ money_local_format($result->total_price) }}</td>
                                            <td>{{ $result->status }}</td>
                                            <td>{{ $result->attended_at }}</td>
                                            <td>{{ $result->created_at }}</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <button 
                                                                type="button" 
                                                                class="btn btn-primary btn-xs mb-2" 
                                                                onclick="loadModalPage();" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#pagemodal"
                                                                data-page="{{ route('booking.show', ['booking'=>$result->id]) }}"
                                                                data-title="View {{ $result->name }}"
                                                                >
                                                                View
                                                            </button>
                                                        </td>

                                                        <td>
                                                            <button 
                                                            type="button" 
                                                            class="btn btn-warning btn-xs mb-2" 
                                                            onclick="loadModalPage();" 
                                                            data-bs-toggle="modal" 
                                                            data-bs-target="#pagemodal"
                                                            data-page="{{ route('booking.edit', ['booking'=>$result->id]) }}"
                                                            data-title="Edit {{ $result->name }}"
                                                            >
                                                            Edit
                                                        </button>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('booking.destroy', ['booking'=> $result->id]) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-link ">Remove</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </table>
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
    </div>
</div>


@endsection