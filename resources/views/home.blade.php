@extends('layouts.app')


@section('content')
<div class="p-5 mb-4 bg-black text-white rounded-0">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Laravel Realestate</h1>
        <p class="col-md-8 fs-4">lorem</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 g-4">

            @forelse ($houses as $house)
            <div class="col">
                <div class="card h-100">
                    <img class="card-img-top" src="{{$house->property_image}}" alt="{{$house->address}}">
                    <div class="card-body">
                        <h4 class="card-title">{{$house->address}}</h4>
                        <p class="card-text">{{$house->desciption}}</p>
                    </div>
                    <div class="card-footer">
                        <strong>€</strong>
                        {{$house->price}}
                    </div>
                </div>
            </div>

            @empty
            <div class="col">
                <p>Come back later!</p>
            </div>
            @endforelse

        </div>
    </div>
</section>
@endsection