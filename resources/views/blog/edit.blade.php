@extends('public.layouts.master')


@section('content')
<form action="{{ route('blog.update',$data->id) }}" method="post">
    @csrf
    @method("PUT")
    <input type="text" value="{{ $data->title }}" placeholder="Nhap title" name="title">
    <input type="text" value="{{ $data->description }}" placeholder="Nhap description" name="description">

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
    <button type="submit">
        update
    </button>
</form>
@endsection