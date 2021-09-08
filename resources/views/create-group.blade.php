@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Group') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('make-group') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="group_name" class="col-md-4 col-form-label text-md-right">{{ __('Group Name') }}</label>

                            <div class="col-md-6">
                                <input id="group_name" type="text" class="form-control @error('group_name') is-invalid @enderror" name="group_name" value="{{ old('group_name') }}" required autocomplete="group_name" autofocus>

                                @error('group_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="group_type" class="col-md-4 col-form-label text-md-right">{{ __('Group Type') }}</label>

                            <div class="col-md-6">
                                <select id="group_type" class="form-control @error('group_type') is-invalid @enderror" name="group_type" value="{{ old('group_type') }}" required autocomplete="group_type">
                                    <option value="Public">Public</option>
                                    <option value="Restricted">Restricted</option>
                                    <option value="Private">Private</option>
                                </select>
                                @error('group_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="group_photo" class="col-md-4 col-form-label text-md-right">{{ __('Group Profile Picture') }}</label>

                            <div class="col-md-6">
                                <input id="group_photo" type="file" class="form-control @error('group_photo') is-invalid @enderror" name="group_photo" required>

                                @error('group_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="approved_users" class="col-md-4 col-form-label text-md-right">{{ __('Approved Moderators') }}</label>

                            <div class="col-md-6">
                                <input id="app_users" type="text" class="form-control @error('app_users') is-invalid @enderror" multiple name="app_users" required>

                                @error('app_users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="approved_users" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="group_description" class="form-control @error('group_description') is-invalid @enderror feature-editor" name="group_description" required></textarea>

                                @error('group_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#app_users').select2({
		placeholder: "Selected Users",
		ajax: {
			url: "{{ route('create-group') }}",
			dataType: 'json',
			type: 'GET',
			data: function(params) { return { term: params.term , page: params.page || 0 }},
			processResults: function (data) {
			let more = data.pagination;
				return {
					results: data.results,
					pagination: {
						more: more.more,
					}
				};
			}
		}
	});
</script>
@endsection
