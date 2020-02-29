@extends('layouts.app')

@section('pageTitle', ' - Stories')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <a href="{{ route('story.add') }}">Add story</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Created at</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($stories as $story)
                    <tr>
                        <td>{{ $story->title }}</td>
                        <td>{{ $story->story_type }}</td>
                        <td>{{ $story->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $stories->render() }}
        </div>
    </div>
</div>
@endsection
