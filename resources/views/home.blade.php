@extends('layouts.appmain')

@section('content')
  <div class="body-wrapper">
    <div class="content-wrapper">
  @foreach($sponsors as $sponsor)

      <div class="card-wrapper">
        <div class="card sponsor-color-red">
          <div class=card-halo></div>
          <div class="card-header">
          <!-- <img src=""> -->
            <span class="card-title">{{ $sponsor->name }}</span>
          </div>
          <div class="card-content">
            <div class="card-subtitle">
              {{ $sponsor->contact_name }}
            </div>
          </div>
          <div class="card-footer">
            <a href="#" class="card-button">Expand</a>
          </div>
        </div>
      </div>
  @endforeach
    
    </div>
  </div>
  <div class="footer-wrapper">
      <div class="footer-item">
        <div>Created by the students and mentors at</div>
      &nbsp;
      <a href="https://www.metalcowrobotics.com" target="_blank">MetalCow Robotics</a>
, FIRST Robotics FRC team #4213.
      </div>
  </div>

@endsection
