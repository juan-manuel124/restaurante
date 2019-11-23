@extends('layout')

@section('title', 'Proyectos')    

@section('content')
    <h1>Proyectos</h1>
    <ul>
    	@forelse($projects as $project)
    		<li> 
                <a href="{{route('projects.show', $project)}}">{{ $project->title }} :</a>
                    
	    		<small> 
	    			{{ $project->descripcion}} 
	    		</small>
                /
                <small> {{ $project->created_at->format('Y-m-d') }} </small>
                /
                <small> {{ $project->updated_at->diffForHumans() }} </small>
	    	</li>
    	@empty
    		<li>No hay qué mostrar</li>
    	@endforelse
        {{ $projects->links() }}
    </ul>
@endsection