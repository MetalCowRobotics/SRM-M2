@extends('layouts.appmain')
@section('content')
<div class="header-wrapper">
</div>
<div class="wrapper">
  <form action="{{ action('HomeController@insert') }}" method="POST" class="form-wrapper">
    {{ csrf_field() }}
    <div class="form-body">
      <div class="dark-text  form-title">Add Sponsor</div>
      <div class="dark-text  form-subtitle">Subtitle</div>
      <div class="dark-text  form-field-label">Label</div>
      <div class="light-text form-field-context">Context</div>
      <div class="dark-text  form-field-entry-short">
        <input name="name" type="text">
        <input name="zip" type="text">
        <input name="city" type="text">
        <input name="state" type="text">
        <input name="address" type="text">
      </div>
      <div class="dark-text  form-field-entry-long"></div>
    </div>
    <div class="form-footer">
       <a href="home"><div class="form-button-cancel">CANCEL</div></a>
       <input type="submit" value="Submit" class="form-button-save">
    </div>
  </form>
</div>

@endsection
