
@extends('app')

@section('content')
<div class="container-fluid">
    <ul class="timeline">
    @foreach($items as $item)
        <li class="timeline-inverted">
          <div class="timeline-badge status{{ $item->status }}"><i class="fa fa-cart-plus"></i></div>
          <div class="timeline-panel"  id="{{ $item->id }}">
            <div class="timeline-heading">
                <h4 class="timeline-title">
                    {{ $item->name }} - {{ $item->description }}
                </h4>
              <p>Class: <i class="glyphicon glyphicon-building"></i> {{ $item->class_id }}</p>
            </div>
            <div class="timeline-body">
              <p>Standard Cost: ${{ $item->stdcost  }}</p>
              <p>Status: {{ $item->status }}</p>
            </div>
          </div>
        </li>
    @endforeach    
    </ul>
</div>

@stop