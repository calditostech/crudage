@extends('pessoas.layout')

@section('title',__('Pessoa (CRUD Laravel) - i9W3b'))

@push('css')
<style>

</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span>@lang('Pessoa (CRUD Laravel)')</span>
                        <a href="{{ url('pessoas/create') }}" class="btn-primary btn-sm">
                            <i class="fa fa-plus"></i> @lang('Criar Novo')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>@lang('Nome')</td>
                                <td>@lang('Email')</td>
                                <td>@lang('Cpf')</td>
                                <td colspan="3" class="text-center">@lang('Ações')</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pessoas as $pessoa)
                            <tr>
                                <td>{{$pessoa->id}}</td>
                                <td>{{$pessoa->nome}}</td>
                                <td>{{$pessoa->email}}</td>
                                <td>{{$pessoa->cpf}}</td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('pessoas.edit', $pessoa->id)}}"
                                        class="btn btn-primary btn-sm">@lang('Editar')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <form action="{{ route('pessoas.destroy', $pessoa->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
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
@endsection

@push('js')
<script>
    // Script personalizado
</script>
@endpush