
@extends('app')

@section('content')
<div class="container-fluid">
    <ul class="timeline">
    @foreach($assets as $asset)
        <li class="timeline-inverted">
          <div class="timeline-badge status{{ $asset->status }}"><i class="glyphicon glyphicon-thumbs-up"></i></div>
          <div class="timeline-panel"  id="{{ $asset->id }}">
            <div class="timeline-heading">
                <h4 class="timeline-title">
                    {{ $asset->assetnum }} - {{ $asset->description }}
                </h4>
              <p>Location: <i class="glyphicon glyphicon-building"></i> {{ $asset->location->location }}</p>
            </div>
            <div class="timeline-body">
              <p>
              {{ $asset->longdesc  }}
              </p>
            </div>
          </div>
        </li>
    @endforeach    
    </ul>
</div>

@stop