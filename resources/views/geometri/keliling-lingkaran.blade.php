@extends('layouts.main')

@section('container')
    <form>
        <div class="mb-3">
            <label for="r" class="form-label">Nilai R</label>
            <input type="number" class="form-control" id="r" name="r">
        </div>
        <button type="submit" class="btn btn-primary">Hitung</button>
    </form>
@endsection
