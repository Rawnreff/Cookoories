@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create post') }}</h1>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="category_id">{{ __('category_id') }}</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">{{ __('title') }}</label>
                        <input type="text" class="form-control" id="title" placeholder="{{ __('title') }}" name="title" value="{{ old('title') }}" />
                    </div>
                    <div class="form-group">
                        <label for="excerpt">{{ __('excerpt') }}</label>
                        <textarea name="excerpt" id="excerpt" class="form-control" cols="30" rows="10">{{ old('excerpt') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('description') }}</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="banner">{{ __('banner') }}</label>
                        <input type="file" class="form-control" id="banner" placeholder="{{ __('banner') }}" name="banner" value="{{ old('banner') }}" />
                    </div>
                    <div class="form-group">
                        <label for="status">{{ __('status') }}</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection

@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $('.select-multiple').select2();
</script>
@endpush