@extends('public.layouts.master')


@section('content')
<form action="{{ route('blog.store') }}" method="post">
    @csrf
    <input type="text" placeholder="Nhap title" name="title">
    <input type="text" placeholder="Nhap description" name="description">
    <x-notification type="success" />
    <x-notification type="error" />
    <x-notification type="warning" />

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <button type="submit">
        Tạo mới
    </button>
</form>
@endsection