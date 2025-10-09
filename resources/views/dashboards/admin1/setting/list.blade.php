@extends('dashboards.admin1.layout')


@section('content')

{{-- all modals --}}
@include("dashboards.admin1.modal")



<div class="content-body">
    <div class="container-fluid">
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
                        <form action="{{ route('setting.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div>
                                    <label>Site Name</label>
                                    <input value="{{ $settings['site_name'] ?? 'sitename'}}" placeholder="Site Name" class="form-control form-control-sm" type="text" name="site_name">
                                </div>
                                <div class="mt-2">
                                    <label>Email Address</label>
                                    <input value="{{ $settings['email_address'] ?? 'support@example' }}" placeholder="support@example.com" class="form-control form-control-sm" type="text" name="email_address">
                                </div>

                                <div class="mt-2">
                                    <label>Logo</label><br>
                                    <?php $logo = $settings['logo'] ?? ''; ?>
                                    <img src="{{ asset($logo ) }}" width="40" alt="...">
                                    <select name="logo" class="form-control form-control-sm">
                                        @foreach ($medias as  $media)
                                            <option value="{{ 'storage/' . $media->media }}"> {{ $media->title }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mt-2">
                                    <label>Favicon</label>
                                    <?php $fv = $settings['favicon'] ?? ''; ?>
                                    <br>
                                    <img src="{{ asset($fv ) }}" width="40" alt="...">
                                    <select name="favicon" class="form-control form-control-sm">
                                        @foreach ($medias as  $media)
                                            <option value="{{ 'storage/' . $media->media }}"> {{ $media->title }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary " type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>


@endsection