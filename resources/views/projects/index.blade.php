@extends('layouts.crmApp')

@section('projectsIndex')
    <div class="form-style-8">
        <h2><a href="{{ route('projects.create') }}">Create Projects</a></h2>
        <div class="table">
            <div class="table-header">
                <div class="header__item"><a>Project title</a></div>
                <div class="header__item"><a>Description</a></div>
                <div class="header__item"><a>Deadline</a></div>
            </div>
            <div class="table-content">
                @foreach($projects as $project)
                    <div class="table-row">
                        <div class="table-data">{{$project->title}}</div>
                        <div class="table-data">{{$project->description}}</div>
                        <div class="table-data">{{$project->deadline}}</div>
                        <div>
                            <td rowspan="2">
                                <a href="{{ route('projects.edit', ['project'=>$project]) }}">Edit</a>
                                <a href="{{ route('projects.destroy', ['project'=>$project]) }}">Delete</a>
                            </td>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div>{{$projects->links()}}</div>
    </div>
@endsection
