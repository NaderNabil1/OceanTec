@extends('FrontEnd.app')
@section('title')Tasks @endsection

@section('content')
<section class="py-3 br-bottom br-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" ><a href="{{ Route('home') }}" >Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Tasks</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

@if ($tasks->Count() > 0)
@foreach($tasks as $task)
<div class="ag-format-container">
  <div class="ag-courses_box">
    <div class="ag-courses_item">
      <a href="{{ route('show-task', $task->slug) }}" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">
          {{$task->title}}
        </div>
        @if($task->status =='Completed')
        <div class="ag-courses-item_title status-succes">
          {{$task->status}}
        </div>
        @else
        <div class="ag-courses-item_title status">
          {{$task->status}}
        </div>
        @endif
        @if($task->start_date!='')
        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            {{$task->start_date}}
          </span>
        </div>
        @endif
        @if($task->end_date!='')
        <div class="ag-courses-item_date-box">
          Ends:
          <span class="ag-courses-item_date">
            {{$task->end_date}}
          </span>
        </div>
        @endif
      </a>
    </div>
</div>
@endforeach
@else
<div class="ag-courses-item_title">
          No Tasks available for you ! 
</div>
@endif
@endsection
