@extends('frontend._layouts.master')
@section('content')
<div class="login-page d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto">
                <div class="submit-form">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        {{-- email field --}}
                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="email" class="form-label text-info"> {{ __('Password') }} <span class="text-danger"><i class="fa fa-star"></i></span></label>
                            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Enter your name">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            @endif
                        </div>
                        {{-- password field --}}
                        <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                            <label for="password" class="form-label text-info"> {{ __('Password') }} <span class="text-danger"><i class="fa fa-star"></i></span></label>
                            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" placeholder="Enter your password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{$errors->first('password')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-info btn-sm d-block">
                                <i class="fa fa-send mr-1"></i> 
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        $(()=>{
            $('.login-page').css({
                height: $(window).height() - $("footer").outerHeight()
            })
        })
    </script>    
@endpush

@push('css')
<style>
    .submit-form{
        border:1px solid var(--main-dark-color);
        padding:15px;
        border-radius: 5px;
    }
</style>
@endpush