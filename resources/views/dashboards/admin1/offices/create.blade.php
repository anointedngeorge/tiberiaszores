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

                                @if ($page_title)
                                    {{ $page_title }}
                                @else
                                    ...
                                @endif
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('content.store', ['type_name'=>'settings', 'page_name'=>'offices']) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div>
                                        <label>Phone 1</label>
                                        <input value="{{ $object->phone1 ?? ''}}" placeholder="Phone number 1"
                                            class="form-control form-control-sm" type="tel" name="phone1">
                                    </div>
                                    <div class="mt-2">
                                        <label>Email Address 1</label>
                                        <input value="{{ $object->email_address1 ?? '' }}"
                                            placeholder="support@example.com" class="form-control form-control-sm"
                                            type="email" name="email_address1">
                                    </div>

                                    <div class="mt-2">
                                        <label>Address 1</label>
                                        <input value="{{ $object->address1 ?? '' }}"
                                            placeholder="Address 1" class="form-control form-control-sm" type="text"
                                            name="address1">
                                    </div>

                                </div>

                                <div class="row">
                                    <div>
                                        <label>Phone 2</label>
                                        <input value="{{ $object->phone2 ?? ''}}" placeholder="Phone number 2"
                                            class="form-control form-control-sm" type="tel" name="phone2">
                                    </div>
                                    <div class="mt-2">
                                        <label>Email Address 2</label>
                                        <input value="{{ $object->email_address2 ?? '' }}"
                                            placeholder="support@example.com" class="form-control form-control-sm"
                                            type="email" name="email_address2">
                                    </div>

                                    <div class="mt-2">
                                        <label>Address 2</label>
                                        <input value="{{ $object->address2 ?? '' }}"
                                            placeholder="Address 2" class="form-control form-control-sm" type="text"
                                            name="address2">
                                    </div>

                                </div>


                                <div class="row">
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