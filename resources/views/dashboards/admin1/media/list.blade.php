@extends('dashboards.admin1.layout')


@section('content')


@include("dashboards.admin1.modal")

<div class="content-body">
    <div class="container-fluid">
        
        <div class="row page-titles">
            <div class="col-md-6 col-sm-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Media</a></li>
                    <li class="breadcrumb-item  active"><a href="javascript:void(0)">Library</a></li>
                </ol>
            </div>

            <div class="col-md-6 col-sm-12 text-right">
                <button 
                    type="button" 
                    class="btn btn-primary btn-xs mb-2" 
                    onclick="loadModalPage();" 
                    data-bs-toggle="modal" 
                    data-bs-target="#pagemodal"
                    data-page="{{ route('media.create') }}"
                    data-title="Create New Media"
                    >Create New Media
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
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medias as $media)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$media->title}}</td>
                                            <td><img width="50" height="50" src="{{ asset("storage/".$media->media ) }}" /></td>
                                            <td>
                                                <form action="{{ route('media.destroy', ['medium'=> $media->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-link ">Remove</button>
                                                </form>
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