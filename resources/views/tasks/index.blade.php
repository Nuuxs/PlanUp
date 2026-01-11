@extends('layouts.app')

@section('content')
<h3 class="mb-4">My Tasks</h3>

<form method="POST" action="{{ route('tasks.store') }}" class="d-flex gap-2 mb-4">
    @csrf
    <input type="text" name="title" class="form-control" placeholder="Task baru..." required>
    <button class="btn btn-primary">Tambah</button>
</form>

<div class="card">
    <ul class="list-group list-group-flush">
        @forelse ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <form method="POST" action="{{ route('tasks.update', $task) }}">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="title" value="{{ $task->title }}">
                    <input type="checkbox" name="is_completed"
                           onchange="this.form.submit()"
                           {{ $task->is_completed ? 'checked' : '' }}>
                    <span class="{{ $task->is_completed ? 'text-decoration-line-through text-muted' : '' }}">
                        {{ $task->title }}
                    </span>
                </form>

                <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </li>
        @empty
            <li class="list-group-item text-center text-muted">
                Belum ada task
            </li>
        @endforelse
    </ul>
</div>
@endsection
