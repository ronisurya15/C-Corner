@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Daftar Postingan</h2>
    <div class="row">
        @foreach ($data as $item)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <span class="badge bg-primary mb-3">{{ $item->postCategory->title }}</span>
                    <span class="badge bg-info mb-3">{{ $item->forum->title }}</span>
                    <div class="text-muted small">
                        <div><i class="bi bi-person-fill"></i> {{ $item->user->name }}</div>
                        <div><i class="bi bi-calendar-event"></i> {{ $item->created_at->format('d F Y H:i') }}</div>
                        <div><i class="bi bi-heart-fill text-danger"></i> {{ rand(1000, 9999) }}</div>
                        <div><i class="bi bi-chat-square-dots text-info"></i> {{ rand(1000, 9999) }}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection