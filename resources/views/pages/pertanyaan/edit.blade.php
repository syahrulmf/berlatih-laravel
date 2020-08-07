@extends('layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="card card-primary shadow mx-3 mt-3">
      <div class="card-header">
        <h3 class="card-title">Edit Pertanyaan {{ $pertanyaan->id }}</h3>
      </div>
      <!-- /.card-header -->
      <form role="form" action="/pertanyaan/{{ $pertanyaan->id }}" method="POST">
        @csrf
        @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" value="{{ $pertanyaan->judul }}" placeholder="Masukan Judul.." required>
              @error('judul')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="isi">Isi</label>
              <textarea name="isi" id="isi" class="form-control" cols="30" rows="3" required>{{ $pertanyaan->isi }}</textarea>
              @error('isi')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
                <label for="profile">Profile</label>
                <input type="text" class="form-control" name="profile_id" value="{{ $pertanyaan->profile_id }}" id="profile" placeholder="Masukan Profile..">
                @error('profile')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                {{-- <select name="profile" id="profile" class="form-control">
                  <option value="">Select</option>
                </select> --}}
            </div>
            <div class="form-group">
                <label for="jawaban">Jawaban</label>
                <input type="text" class="form-control" name="jawaban_tepat_id" value="{{ $pertanyaan->jawaban_tepat_id }}" id="jawaban" placeholder="Masukan jawaban..">
                @error('jawaban')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                {{-- <select name="jawaban" id="jawaban" class="form-control">
                  <option value="">Select</option>
                </select> --}}
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection