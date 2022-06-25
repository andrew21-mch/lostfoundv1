@extends('layouts.layout')
@section('content')
<div class="container">
  <div class="home-content">
    <div class="overview-boxes">
      @foreach ($teachersubjects as $subj)

      @if($subj->teacher_id == Session::get('userid'))
      <a href="teacherviewsubject/{{$subj->id}}" class="box">
        <div class="right-side">
          <div class="box-topic">{{$subj->name}}</div>
            <span class="iconify" data-icon="emojione-v1:eye"></span>
        </div>
      </div>
      </a>
      @endif
    @endforeach
</div>
<div class="container">
  <div class="home-content">
      <div class="overview-boxes">
          <a href="/insertmarks/first1" class="box" style="height: 60px; width:150px; text-decoration: none">
            Sequence 1
          </a>
          <a href="/insertmarks/seconds2" class="box" style="height: 60px; width:150px; text-decoration: none">
            Sequence 2
          </a>
          <a href="/insertmarks/thirds3" class="box" style="height: 60px; width:150px; text-decoration: none">
            Sequence 2
          </a>
          <a href="/insertmarks/fourths4" class="box" style="height: 60px; width:150px; text-decoration: none">
            Sequence 4
          </a>
          <a href="/insertmarks/fifths5" class="box" style="height: 60px; width:150px; text-decoration: none">
            Sequence 5
          </a>
          <a href="/insertmarks/sixths6" class="box" style="height: 60px; width:150px; text-decoration: none">
            Sequence 6
          </a>
          </div>
      </div>
    <div class="home-content">
      <div class="overview-boxes">

      </div>
    </div>
  </div>
@endsection
