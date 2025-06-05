@extends('public.layouts.master')

@section('content')
<h1>Đây là trang tạo mới bài viết</h1>
<a href="{{ route('blog.create') }}">Tạo mới</a>

@if (session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Tiêu đề</th>
            <th>Mô tả</th>
            <th>Hành động</th> {{-- Cột action --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>
                {{-- Nút Edit --}}
                <a href="{{ route('blog.edit', $post->id) }}">Edit</a>

                {{-- Nút Delete --}}
                <form action="{{ route('blog.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xoá?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">Chưa có bài viết nào</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection