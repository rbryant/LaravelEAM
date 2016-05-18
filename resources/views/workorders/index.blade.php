@extends('app')

@section('content')
<div class="container-fluid">
    <ul class="timeline">
    @foreach($workorders as $workorder)
        <li class="timeline-inverted">
          <div class="timeline-badge status{{ $workorder->status }}"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">{{ $workorder->description  }}</h4>
              <p><small class="text-muted">Due by <i class="glyphicon glyphicon-time"></i> {{ date('F d, Y', strtotime($workorder->duedate))  }} </small></p>
            </div>
            <div class="timeline-body">
              <p>
              {{ $workorder->longdesc  }}
              </p>
            </div>
          </div>
        </li>
    @endforeach    
    </ul>
</div>
@stop