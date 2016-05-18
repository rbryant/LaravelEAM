@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="ajax_header">
                <h2>Asset Details</h2>
            </div>
            {!! Form::model($asset, array('url' => array('assets', $asset->id))) !!}
            <div class="form-group">
                    {!! Form::label('assetnum', 'Asset Num', ['class'=>'view']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-building"></i></div>
                    {!! Form::text('assetnum', $asset->assetnum, ['readonly','class'=>'view']) !!}
                </div>
            </div>

            <div class="form-group">
                    {!! Form::label('description', 'Description', ['class'=>'view']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-building"></i></div>
                    {!! Form::text('description', $asset->description, ['readonly','class'=>'view']) !!}
                </div>
            </div>

            <div class="form-group">
                    {!! Form::label('longdesc', 'Long Description', ['class'=>'view']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-building"></i></div>
                    {!! Form::textarea('longdesc', $asset->longdesc, ['readonly','class'=>'view']) !!}
                </div>
            </div>
            
            <div class="form-group">
                    {!! Form::label('location_id', 'Location', ['class'=>'view']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-building"></i></div>
                    {!! Form::text('location_id', $asset->location->location, ['readonly','class'=>'view']) !!}
                </div>
            </div>            

            <div class="form-group">
                    {!! Form::label('model', 'Model', ['class'=>'view']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-building"></i></div>
                    {!! Form::text('model', $asset->model, ['readonly','class'=>'view']) !!}
                </div>
            </div>    
            
            <div class="form-group">
                    {!! Form::label('serial', 'Serial Number', ['class'=>'view']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-building"></i></div>
                    {!! Form::text('serial', $asset->serial, ['readonly','class'=>'view']) !!}
                </div>
            </div>    
            
            <div class="form-group">
                    {!! Form::label('system', 'System', ['class'=>'view']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-building"></i></div>
                    {!! Form::text('system', $asset->system, ['readonly','class'=>'view']) !!}
                </div>
            </div>    
            
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop