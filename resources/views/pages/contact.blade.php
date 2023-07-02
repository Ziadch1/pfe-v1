@extends('layouts.master')
@section('content')
  <form action="">
    <h1>contact</h1>
    <span class="span1"></span>
    <span class="span2"></span>
    <div class="mb-4">
        <label for="name">name</label>
        <input type="text" class="form-control" placeholder="entrer votre nom ...">
    </div>
    <div class="mb-4">
        <label for="email">email</label>
        <input type="email" class="form-control" placeholder="entrer votre Email ...">
    </div>
    <div class="mb-4">
        <label for="password">password</label>
        <input type="password" class="form-control" placeholder="entrer votre password ...">
    </div>
    <div class="mb-4">
        <label for="confirm password">confirm password</label>
        <input type="password" class="form-control" placeholder="confirm password ...">
    </div>
    <div class="mb-4">
        <label for="msg">Entre votre msg</label>
        <input type="password" class="form-control" placeholder="confirm password ...">
    </div>
    <input type="submit" value="Envoyer" class="btn btn-success">
  </form>
@endsection