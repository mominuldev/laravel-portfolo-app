@extends('admin.layouts.app')

@section('title', 'Categories')

@section('content')

    <section class="bg-slate-400 min-h-fit">
        <div class="mx-auto max-w-7xl py-12">
            
                <h1 class="text-3xl font-bold text-white mb-2">All Blog</h1>
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Blog</a>
            
    </section>

@endsection