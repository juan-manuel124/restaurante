@extends('layout')

@section('title', 'Proyectos | ' . $project->title)    

@section('content')
    <h1>{{$project->title}}</h1>
    
    <p> {{$project->descripcion}} </p>

    <p> {{$project->created_at->diffForHumans()}} </p>

@endsection

