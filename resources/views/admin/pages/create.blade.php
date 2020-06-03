@extends('layouts.app')
@section('content')

    <div class='container'>
        <div class="row">
            <div class="col-12">
                @foreach ($errors->all() as $message)
                    {{$message}}
                @endforeach
                <form action="{{route('admin.pages.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="summary">Summary</label>
                    <input type="text" name="summary" class="form-control">
                </div>
                <div class="form-group">
                    <label for="body">Text</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Summary</label>
                    <select name="category_id" id="">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach                    
                    </select>
                </div>
                <div class="form-group">
                        <h3>Tags</h3>
                        @foreach ($tags as $tag)
                        <label for="tags-{{$tag->id}}">{{$tag->name}}</label>
                        <input type="checkbox" name="tags[]" id="tags-{{$tag->id}}" value="tags-{{$tag->id}}">
                        @endforeach
                </div>
                <div class="form-group">
                    <h3>Photos</h3>
                    @foreach ($photos as $photo)
                    <label for="photos-{{$photo->id}}">{{$photo->name}}</label>
                    <input type="checkbox" name="photos[]" id="photos-{{$photo->id}}" value="photos-{{$photo->id}}">
                    @endforeach
            </div>

                <input type="submit" value="Save" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    
@endsection