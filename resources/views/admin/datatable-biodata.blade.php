@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Tabel Biodata Lulusan</h1>

        <div style="margin-top: 10px">
            <button type="button" class="btn btn-warning" id="modal-toggle"><i class='bx bxs-edit'></i> Edit</button>
        </div>
        <div style="margin-top: 10px">
            <a type="button" class="btn btn-warning" href="{{ route('biodata.create') }}" ><i class='bx bxs-edit'></i> Create</a>
        </div>


        <div class="container">
            <table class="table-biodata stripe hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>TTL</th>
                        <th>Kelas</th>
                        <th>Tahun Lulus</th>
                        <th>Status Lulusan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodata as $bio)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="nama">{{ $bio->nama }}</td>
                            <td>{{ $bio->nisn }}</td>
                            <td class="nis" id="{{ $bio->nis }}">{{ $bio->nis }}</td>
                            <td>{{ $bio->tempat_lahir . ', ' . \Carbon\Carbon::parse($bio->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
                            <td>{{ Str::upper(str_replace('-', ' ', $bio->kelas)) }}</td>
                            <td>{{ $bio->tahun_lulus }}</td>
                            <td>
                            @if ($bio->status_lulusan == 1)
                                {{ 'Kuliah' }}
                            @elseif ($bio->status_lulusan == 2)
                                {{ 'Kerja' }}
                            @else
                                {{ 'Kuliah dan Kerja' }}
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@include('component.modal-biodata')

