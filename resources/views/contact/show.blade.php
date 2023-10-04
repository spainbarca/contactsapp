<!-- Main Content-->
@extends('layouts.app')

@section('content')
<div class="container px-4 px-lg-5">
    <div class="col-md-12 col-xl-12">
        <a href="{{ route('contact.index') }}"><button type="button" class="btn btn-info waves-effect waves-light">Atrás</button></a>
        <div class="card">
            <img class="card-img-top img-fluid" src={{asset('https://bloggingguide.com/wp-content/uploads/2021/12/6461.png')}} alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $contact->name }}</h5>
                <p class="card-text"><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="tel:{{$contact->phone_number}}">{{$contact->phone_number}}</a></li></a>
                <li class="list-group-item">{{ $contact->age}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link"><button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#contactEdit{{ $contact->id }}">Editar</button></a> @include('contact.edit')
                <p></p>
                <a href="#" class="card-link"><form action="{{ route('contact.destroy', $contact) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger waves-effect waves-light">Eliminar</button>
                </form></a>
            </div>
        </div>

    </div>
</div>
@endsection

