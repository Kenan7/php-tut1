@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('story.save') }}" method="POST">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <select name="story_type" class="form-control">
                        <option value="bug" selected>Bug</option>
                        <option value="enhancement">Enhancement</option>
                        <option value="feature">Feature</option>

                    </select>
                </div>

                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>