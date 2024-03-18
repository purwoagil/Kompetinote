@extends('login.layouts.main')

@section('bodyauth')
<main class="form-signin">
  <form class="row g-3" action="/login/daftar" method="POST">
    @csrf
    <div class="col-md-6">
      <input type="text" name="Nama" class="form-control @error('Nama') is-invalid @enderror"  placeholder="Nama Lengkap">
    </div>
    <div class="col-md-6">
      <input type="number" name="NIM" class="form-control  @error('NIM') is-invalid @enderror"   placeholder="NIM">
    </div>
    <div class="col-md-6">
      <input type="email" name="EmailOff" class="form-control  @error('EmailOff') is-invalid @enderror"   placeholder="Email Students">
    </div>
    <div class="col-md-6">
      <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"   placeholder="Password">
    </div>
    <div class="col-md-6">
      <input type="number" name="No_hp" class="form-control  @error('No_hp') is-invalid @enderror"   placeholder="No Hp">
    </div>
    <div class="col-md-6">
      <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror"   placeholder="Email Pribadi">
    </div>
    <div class="col-md-6">
      <input type="text" name="Fakultas" class="form-control @error('Fakultas') is-invalid @enderror"   placeholder="Fakultas">
    </div>
    <div class="col-md-6">
      <input type="text" name="Prodi" class="form-control  @error('Prodi') is-invalid @enderror"   placeholder="Program Studi">
    </div>
    <div class="col-md-6">
      <input type="text" name="Angkatan" class="form-control  @error('Angkatan') is-invalid @enderror"   placeholder="Angkatan">
    </div>
    {{-- <div class="col-md-6">
      <input type="file" name="Foto" class="form-control"   placeholder="Pas Photo">
    </div> --}}
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
  </main>
@endsection