@extends('layouts.main')

@section('title', 'Страница новостей - Новости')

@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Описание</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->heading  }}</td>
                <td>{{ $item->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $news->links() }}

@endsection
