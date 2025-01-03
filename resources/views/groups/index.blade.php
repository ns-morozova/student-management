@extends('layouts.app')

@section('content')
    @auth
        <a href="{{ route('profile') }}">Профиль</a>
    @endauth
    <h1>Все группы</h1>
    <a href="{{ route('groups.create') }}">Создать новую группу</a>
    <ul>
        @foreach($groups as $group)
            <li>
                <a href="{{ route('groups.show', $group) }}">{{ $group->title }}</a>
                <ul>
                    @foreach($group->students as $student)
                        <li>{{ $student->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection