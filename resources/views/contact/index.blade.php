@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($contacts->count()==0)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('No hay contactos') }}
                    </div>
                </div>
            </div>
        @else
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Listado de Contactos</h4>
                        <p class="card-subtitle mb-4"> Contactos totales </p>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombres</th>
                                        <th>Correo</th>
                                        <th>Edad</th>
                                        <th>Teléfono</th>
                                        <th colspan="3" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <th scope="row">{{ $contact->id }}</th>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->age }}</td>
                                            <td>{{ $contact->phone_number }}</td>
                                            <td>
                                                <a href="{{ route('contact.show',$contact) }}"><button type="button" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-eye-settings-outline"></i></button></a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#contactEdit{{ $contact->id }}"><i class="dripicons-document-edit"></i></button>
                                            </td>
                                            @include('contact.edit')
                                            <td>
                                                <form action="{{ route('contact.destroy', $contact) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <button type="submit" class="btn btn-danger waves-effect waves-light"><i class="dripicons-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- end card-body-->
                </div>
                <!-- end card -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        @endif
    </div>
</div>
@endsection
