@extends('m_user/template')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-between align-items-center mb-4">
        <div class="col-md-6">
            <h2 class="text-primary">CRUD User</h2>
        </div>
        <div class="col-md-6 float-right">
            <a class="btn btn-success float-right" href="{{ route('m_user.create') }}">
                + Tambah User
            </a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped table-hover text-center">
                <thead class="table-info">
                    <tr>
                        <th>#</th>
                        <th>Level ID</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($useri as $index => $m_user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $m_user->level_id }}</td>
                            <td>{{ $m_user->username }}</td>
                            <td>{{ $m_user->nama }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id) }}">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                                <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id) }}">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
