@extends('layout.admin.main')

@section('content')
    <div class="content">
    <div class="card-body" style="margin-top: 1rem">
                <form action="" class="form-group" id="modal-biodata">
                    @csrf
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-nama">Nama Lengkap</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="nama" class="form-control" id="input-nama" >
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-nisn">NISN</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="number" name="nisn" class="form-control" id="input-nisn" >
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-nis">NIS</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="number" name="nis" class="form-control" id="input-nis" >
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-jenisKelamin">Jenis Kelamin</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="jenis_kelamin" id="input-jenisKelamin" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tempatLahir">Tempat Lahir</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tempat_lahir" class="form-control" id="input-tempatLahir" >
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tanggal_lahir" class="form-control" id="input-tanggalLahir">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-kelas">Kelas</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="kelas" id="input-kelas" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="PPL">PPL</option>
                                <option value="DM">DM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tahunLulus">Tahun Lulus</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tahun_lulus" class="form-control" id="input-tahunLulus" >
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-statusLulusan">Status Lulusan</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="status_lulusan" id="input_statusLulusan" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="1">Kuliah</option>
                                <option value="2">Bekerja</option>
                                <option value="3">Kuliah dan Kerja</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-alamat">Alamat</label>
                        </div>
                        <div class="input-wrapper">
                            <textarea name="alamat" class="form-control" id="input-alamat" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="button-wrapper">
                        <button type="submit" class="btn btn-primary modal-submit">Submit</button>
                        <button type="button" class="btn btn-secondary" style="margin-left: 10px" id="modal-close">Tutup</button>
                    </div>
                </form>
            </div>
    </div>
@endsection

@include('component.modal-biodata')

