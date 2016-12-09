@if (Session::has('dsuccess'))
	<div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close">×</button>
        <span><b> Success - </b> {{ Session::get('dsuccess') }}</span>
    </div>
@elseif (Session::has('csuccess'))
	<div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close">×</button>
        <span><b> Success - </b> {{ Session::get('csuccess') }}</span>
    </div>
@elseif (Session::has('usuccess'))
	<div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close">×</button>
        <span><b> Success - </b> {{ Session::get('usuccess') }}</span>
    </div>
@endif