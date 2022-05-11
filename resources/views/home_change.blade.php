@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change your data...</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('change', ['id' => $id]) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('Model') }}</label>

                            <div class="col-md-6">
                                <input id="model" placeholder="Opel Insignia" type="text" class="form-control @error('Model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autofocus>

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="year" class="col-md-4 col-form-label text-md-end">{{ __('Year') }}</label>

                            <div class="col-md-6">
                                <input id="year" placeholder="2137" type="number" class="form-control @error('year') is-invalid @enderror" name="year" required>

                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Change it!') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
