@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="{{ route('beers.create') }}" class="btn btn-primary">Biertje aanmaken</a>
                        </div>
                        <div class="col-xs-6">
                            <form id="edit-form" class="form" role="form" method="GET" action="/beers/{{ $beers[0]['id'] }}/edit/">
                                <div class="form-group">
                                    <label for="exampleSelect1">Biertje aanpassen</label>
                                    <select id="edit-dropdown" class="form-control" id="beer">
                                        @foreach($beers as $beer)
                                            <option value="{{ $beer['id'] }}">{{ $beer['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Aanpassen</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        jQuery('#edit-dropdown').on('change', function() {
            jQuery('#edit-form').attr('action', '/beers/' + jQuery(this).val() + '/edit')
        });
    </script>
@endsection
