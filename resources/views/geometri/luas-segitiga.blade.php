@extends('layouts.main')

@section('container')
    <form>
        <div class="mb-3">
            <label for="alas" class="form-label">Nilai Alas</label>
            <input type="number" class="form-control" id="alas" name="alas">
        </div>
        <div class="mb-3">
            <label for="tinggi" class="form-label">Nilai Tinggi</label>
            <input type="number" class="form-control" id="tinggi" name="tinggi">
        </div>
        <button type="submit" class="btn btn-primary">Hitung</button>
    </form>
@endsection
