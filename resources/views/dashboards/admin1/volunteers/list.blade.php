@extends('dashboards.admin1.layout')


@section('content')

{{-- all modals --}}
@include("dashboards.admin1.modal")



<div class="content-body">
    <div class="container-fluid">
        
        <div class="row page-titles">
            <div class="col-md-6 col-sm-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Volunteer</a></li>
                    <li class="breadcrumb-item  active"><a href="javascript:void(0)">Volunteer Listing</a></li>
                </ol>
            </div>

            <div class="col-md-6 col-sm-12 text-right">
                <button 
                    type="button" 
                    class="btn btn-primary btn-xs mb-2" 
                    onclick="loadModalPage();" 
                    data-bs-toggle="modal" 
                    data-bs-target="#pagemodal"
                    data-page="{{ route('volunteer.create') }}"
                    data-title="Add New Volunteer"
                    >Add New Volunteer
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
                                        <th>Picture</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $result)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="/storage/{{ $result->image }}" alt="{{ $result->name }}" width="50" height="50"></td>
                                            <td>{{$result->name}}</td>
                                            <td>
                                                {{ $result->email }}
                                            </td>
                                            <td>
                                                {{ $result->phone }}
                                            </td>
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
                                                            data-page="{{ route('volunteer.edit', ['volunteer'=>$result->id]) }}"
                                                            data-title="Edit {{ $result->name }}"
                                                            >
                                                            Edit
                                                        </button>

                                                        </td>
                                                        <td>
                                                            <form action="{{ route('volunteer.destroy', ['volunteer'=> $result->id]) }}" method="post">
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