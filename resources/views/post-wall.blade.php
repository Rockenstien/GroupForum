@extends('layouts.app')

@section('content')
<div class="container">
    <x-post />
    <div class="row justify-content-center mb-2">
        <div class="col-md-10">
            <x-commentsection />
        </div>
    </div>
</div>
@endsection
