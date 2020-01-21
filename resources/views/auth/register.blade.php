@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form class="register-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- user type radio buton --}}
                        <div class="form-group row field-r">
                            <label class="col-form-label">{{ __('Company') }}</label>
                            <input type="radio" class="@error('type') is-invalid @enderror" name="type" value="company" required autocomplete="type" autofocus>
                            <input type="radio" class="@error('type') is-invalid @enderror" name="type" value="jobseeker" required autocomplete="type" autofocus>
                            <label class="col-form-label">{{ __('Job seeker') }}</label>
                           
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>
                        {{-- company name  --}}
                        <div class="form-group row field-c">
                            <label for="c_companyName" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                    <input id="c_companyName" type="text" class="form-control @error('c_companyName') is-invalid @enderror" name="c_companyName" value="{{ old('c_companyName') }}" required autocomplete="c_companyName" autofocus>

                                @error('c_companyName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- contact person full name  --}}
                        <div class="form-group row  field-c">
                            <label for="c_contactPersonFullName" class="col-md-4 col-form-label text-md-right">{{ __('Contact Person Full Name') }}</label>

                            <div class="col-md-6">
                                    <input id="c_contactPersonFullName" type="text" class="form-control @error('c_contactPersonFullName') is-invalid @enderror" name="c_contactPersonFullName" value="{{ old('c_contactPersonFullName') }}" required autocomplete="c_contactPersonFullName" autofocus>

                                @error('c_contactPersonFullName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        {{-- job seeker title  --}}
                        <div class="form-group row  field-j">
                            <label for="j_title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                    <input id="j_title" type="text" class="form-control @error('j_title') is-invalid @enderror" name="j_title" value="{{ old('j_title') }}" required autocomplete="j_title" autofocus>

                                @error('j_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- job seeker last name   --}}
                        <div class="form-group row field-j">
                            <label for="j_lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                    <input id="j_lastName" type="text" class="form-control @error('j_lastName') is-invalid @enderror" name="j_lastName" value="{{ old('j_lastName') }}" required autocomplete="j_lastName" autofocus>

                                @error('j_lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- job seeker j_firstName  --}}
                        <div class="form-group row field-j">
                            <label for="j_firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                    <input id="j_firstName" type="text" class="form-control @error('j_firstName') is-invalid @enderror" name="j_firstName" value="{{ old('j_firstName') }}" required autocomplete="j_firstName" autofocus>

                                @error('j_firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        {{-- job seeker j_contactNumber  --}}
                        <div class="form-group row field-j">
                            <label for="j_contactNumber" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                    <input id="j_contactNumber" type="text" class="form-control @error('j_contactNumber') is-invalid @enderror" name="j_contactNumber" value="{{ old('j_contactNumber') }}" required autocomplete="j_contactNumber" autofocus>

                                @error('j_contactNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- job seeker j_dateOfBirth  --}}
                        <div class="form-group row field-j">
                            <label for="j_dateOfBirth" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>

                            <div class="col-md-6">
                                    <input id="j_dateOfBirth" type="date" class="form-control @error('j_dateOfBirth') is-invalid @enderror" name="j_dateOfBirth" value="{{ old('j_dateOfBirth') }}" required autocomplete="j_dateOfBirth" autofocus>

                                @error('j_dateOfBirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- job seeker j_highestQualificationAchieved  --}}
                        <div class="form-group row field-j">
                            <label for="j_highestQualificationAchieved" class="col-md-4 col-form-label text-md-right">{{ __('Highest Qualification Achieved') }}</label>

                            <div class="col-md-6">
                                    <input id="j_highestQualificationAchieved" type="text" class="form-control @error('j_highestQualificationAchieved') is-invalid @enderror" name="j_highestQualificationAchieved" value="{{ old('j_highestQualificationAchieved') }}" required autocomplete="j_highestQualificationAchieved" autofocus>

                                @error('j_highestQualificationAchieved')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- job seeker j_cvUploadedStatus  --}}
                        <div class="form-group row field-j">
                            <label for="j_cvUploadedStatus" class="col-md-4 col-form-label text-md-right">{{ __('CV Uploaded Status') }}</label>

                            <div class="col-md-6">
                                    <input id="j_cvUploadedStatus" type="text" class="form-control @error('j_cvUploadedStatus') is-invalid @enderror" name="j_cvUploadedStatus" value="{{ old('j_cvUploadedStatus') }}" required autocomplete="j_cvUploadedStatus" autofocus>

                                @error('j_cvUploadedStatus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- job seeker j_skills  --}}
                        <div class="form-group row field-j">
                            <label for="j_skills" class="col-md-4 col-form-label text-md-right">{{ __('Skills') }}</label>

                            <div class="col-md-6">
                                    <input id="j_skills" type="text" class="form-control @error('j_skills') is-invalid @enderror" name="j_skills" value="{{ old('j_skills') }}" required autocomplete="j_skills" autofocus>

                                @error('j_skills')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- job seeker postalAddress  --}}
                        <div class="form-group row field-p">
                            <label for="postalAddress" class="col-md-4 col-form-label text-md-right">{{ __('Postal Address') }}</label>

                            <div class="col-md-6">
                                    <input id="postalAddress" type="text" class="form-control @error('postalAddress') is-invalid @enderror" name="postalAddress" value="{{ old('postalAddress') }}" required autocomplete="postalAddress" autofocus>

                                @error('postalAddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- email  --}}
                        <div class="form-group row  field-p">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email address') }}</label>

                            <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- password --}}
                        <div class="form-group row field-p">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- confirm password --}}
                        <div class="form-group row field-p">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
@endsection
