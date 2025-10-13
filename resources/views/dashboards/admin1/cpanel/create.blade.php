@extends('dashboards.admin1.layout')


@php
    $domains = [
        "tiberiaszores.com"
    ];
@endphp

@section('content')

    {{-- all modals --}}
    @include("dashboards.admin1.modal")


    <div class="content-body">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Staff Mails</h4>
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ route('content.cpanel', ['type_name' => 'settings', 'page_name' => 'cpanel', 'is_queryset' => 'y']) }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div>
                                        <label>Username</label>
                                        <input required  onkeyup="validateInput(this)" placeholder="Username" class="form-control form-control-sm" type="text"
                                            name="username">
                                    </div>

                                    <div>
                                        <label>Password</label>
                                        <input required  placeholder="Password" class="form-control form-control-sm" type="text"
                                            name="password">
                                    </div>
                                    <div class="mt-2">
                                        <label>Choose Domain</label>
                                        <select required name="domain" class="form-control form-control-sm">
                                            @foreach ($domains as $domain)
                                                <option value="{{ $domain  }}"> {{ ucfirst($domain) }} </option>
                                            @endforeach
                                        </select>
                                    </div>

            
                                </div>

                                <div class="row">
                                    <div class="mt-3">
                                        <button class="btn btn-block btn-primary " type="submit">Add Service</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    @include('dashboards.admin1.cpanel.table')
                </div>
                
            </div>
        </div>
    </div>


@endsection