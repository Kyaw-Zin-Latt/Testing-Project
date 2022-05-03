@extends('layouts.app')

@section('content')
    <div class="col-12">
        <h4 class="text-primary">Google Map Testing</h4>
        <div class="row">
            <div class="col-6">
                <div id="itm_location" style="width: 100%; height: 400px;"></div>
                <div class="my-3">
                    <form action="{{ route('test.store') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input id="lat" name="lat" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Latitude</label>
                        </div>
                        <div class="form-floating">
                            <input id="lng" name="lng" type="text" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Longitude</label>
                        </div>
                        <div class="">
                            <button class="btn btn-primary mt-2 w-100">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
