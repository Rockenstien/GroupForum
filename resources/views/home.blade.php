@extends('layouts.app')

@section('content')
<div class="container">
    {{-- home page post --}}
    <x-post />

    {{-- post modal --}}
    <x-post_modal />
    {{-- <x-user-page /> --}}
</div>
@endsection
