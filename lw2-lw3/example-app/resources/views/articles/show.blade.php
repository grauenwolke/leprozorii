@extends('layout.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-td">
        <div class="pull-left">
            <h2>Edit Article</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('articles.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('articles.update',$article->id) }}" method="POST">
    @csrf

    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" value="{{ $article->title }}" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px;" name="description" placeholder="Description">{{ $article->description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" value="{{ $article->price }}" class="form-control" placeholder="Price">
            </div>
        </div>

    </div>
</form>
@endsection