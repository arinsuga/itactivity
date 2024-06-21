<h3 class="text-center text-danger">{{ __('contact.contactus') }}</h3>
<p>For questions, feedback, or any inquiries, feel free to contact us through the form</p>


@if ($errors->any())
<div class="alert alert-danger" role="alert">
  Pengisian Form Contact tidak lengkap
</div>
@endif

@if (session()->has('message'))
<div class="alert alert-success" role="alert">
    {{ session()->get('message') }}
</div>
@endif

<form role="form" id="frmData" action="{{ route('website.contact.store') }}" method="post">
    @csrf

    <div class="">
        <div class="mb-3">  
            <label class="form-check-label" for="purpose">{{ __('contact.purpose') }}</label>
            <input readonly class="form-control" type="text" id="purpose" name="purpose" value="Brands inquiry">
            <strong>{{ $errors->first('purpose') }}</strong>
        </div>

        <div class="mb-3">
            <label for="firsName" class="form-label">{{ __('contact.firstname') }}</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="{{ old('firstName') }}" placeholder="">
            <strong>{{ $errors->first('firstName') }}</strong>
        </div>        

        <div class="mb-3">
            <label for="lastName" class="form-label">{{ __('contact.lastname') }}</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="{{ old('lastName') }}" placeholder="">
            <strong>{{ $errors->first('lastName') }}</strong>
        </div>        

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('contact.email_address') }}</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="">
            <strong>{{ $errors->first('email') }}</strong>
        </div>        
    </div>


    <div class="d-flex justify-content-center mt-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="certify" name="certify">
            <label class="form-check-label" for="certify">
                {{ __('contact.information') }}
            </label>
        </div>
    </div>


    <div class="text-center mt-3">
        <input type="submit" value="{{ __('contact.send') }}" class="btn btn-danger">
    </div>
</form>

<div style="height: 50px; width: 50px;">


</div>


