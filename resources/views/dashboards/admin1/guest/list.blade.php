@extends('dashboards.admin1.layout')


@section('content')

{{-- all modals --}}
@include("dashboards.admin1.modal")



<div class="content-body">
    <div class="container-fluid">
        
        <div class="row page-titles">
            <div class="col-md-6 col-sm-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Guest</a></li>
                    <li class="breadcrumb-item  active"><a href="javascript:void(0)">Guest Listing</a></li>
                </ol>
            </div>

            <div class="col-md-6 col-sm-12 text-right">
                <button 
                    type="button" 
                    class="btn btn-primary btn-xs mb-2" 
                    onclick="loadModalPage();" 
                    data-bs-toggle="modal" 
                    data-bs-target="#pagemodal"
                    data-page="{{ route('guest.create') }}"
                    data-title="Create New Hotel"
                    >Create New Guest
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
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Created-At</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $result)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$result->fullname()}}</td>
                                            <td>{{ $result->email }}</td>
                                            <td>{{ $result->phone }}</td>
                                            <td>{{ $result->created_at }}</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        {{-- <td>
                                                            <button 
                                                                type="button" 
                                                                class="btn btn-primary btn-xs mb-2" 
                                                                onclick="loadModalPage();" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#pagemodal"
                                                                data-page="{{ route('guest.show', ['guest'=>$result->id]) }}"
                                                                data-title="View Guest {{ $result->name }}"
                                                                >
                                                                View
                                                            </button>
                                                        </td> --}}

                                                        <td>
                                                            <button 
                                                            type="button" 
                                                            class="btn btn-warning btn-xs mb-2" 
                                                            onclick="loadModalPage();" 
                                                            data-bs-toggle="modal" 
                                                            data-bs-target="#pagemodal"
                                                            data-page="{{ route('guest.edit', ['guest'=>$result->id]) }}"
                                                            data-title="Edit Guest {{ $result->fullname() }}"
                                                            >
                                                            Edit
                                                        </button>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('guest.destroy', ['guest'=> $result->id]) }}" method="post">
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