@props(['email'=>''])
<div class="form-group">
    <label for="email">@lang('Email')</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="@lang('Your email')"
    value="{{ old('email',$email) }}" autofocus>
</div>