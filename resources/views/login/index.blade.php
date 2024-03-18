@extends('login.layouts.main')

@section('bodyauth')

@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<main class="form-signin">
    <form action="/login" method="post">
      @csrf
      {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
      <h1 class="h3 mb-3 fw-normal">SKIRIPSI Project 1</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" @error('email') is-invalid @enderror autofocus required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email') 
        <div class="invalid-feedback d-block">
          {{ $message }}
        </div> 
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
  </main>
@endsection