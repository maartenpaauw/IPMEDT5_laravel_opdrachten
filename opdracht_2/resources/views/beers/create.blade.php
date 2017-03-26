@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Biertje aanmaken</div>

                    <div class="panel-body">
                        <form class="form" role="form" method="POST" action="{{ route('beers.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">Naam</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Naam" value="{{ old('name') }}" required="required" />

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="percentage">Persentage</label>
                                <input type="number" class="form-control" id="percentage" name="percentage" placeholder="Persentage" value="{{ old('percentage') }}" min="0" max="100" step="0.1" required="required">

                                @if ($errors->has('percentage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('percentage') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Toevoegen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection