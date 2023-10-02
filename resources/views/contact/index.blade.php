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

                        {{ __('You are logged in!') }}
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
                                        <th width="20%">Acciones</th>
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
                                            <td width="20%">
                                                <button type="button" class="btn btn-warning waves-effect waves-light">{{ __('Editar') }}</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light">{{ __('Eliminar') }}</button>
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
