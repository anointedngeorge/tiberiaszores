@extends('dashboards.admin1.layout')


@section('content')

{{-- all modals --}}
@include("dashboards.admin1.modal")



<div class="content-body">
    <div class="container-fluid">
        
        <div class="row page-titles">
            <div class="col-md-6 col-sm-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Blog Post</a></li>
                    <li class="breadcrumb-item  active"><a href="javascript:void(0)">Blog Listing</a></li>
                </ol>
            </div>

            <div class="col-md-6 col-sm-12 text-right">
                <button 
                    type="button" 
                    class="btn btn-primary btn-xs mb-2" 
                    onclick="loadModalPage();" 
                    data-bs-toggle="modal" 
                    data-bs-target="#pagemodal"
                    data-page="{{ route('blog.create') }}"
                    data-title="Create Blog Post"
                    >Create Blog Post
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
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $result)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="/storage/{{$result->image}}" width="50" height="50"  alt="{{$result->title}}">
                                            </td>
                                            <td>
                                                {{ $result->title }}
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
                                                            data-page="{{ route('blog.edit', ['blog'=>$result->id]) }}"
                                                            data-title="Edit {{ $result->title }}"
                                                            >
                                                            Edit
                                                        </button>

                                                        </td>
                                                        <td>
                                                            <form action="{{ route('blog.destroy', ['blog'=> $result->id]) }}" method="post">
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