@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Bewerken</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li> @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" enctype="multipart/form-data" action="{{ route('werken.update',[$werk->id]) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" />
                </div>
                <div class="form-group">
                    <label for="blog">Blog:</label>
                    <input type="text" class="form-control" name="blog" />
                </div>
                <button type="submit" class="btn btn-secondary">Toevoegen</button>
            </form>
        </div>
    </div>
</div>
@endsection