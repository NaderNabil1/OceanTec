<div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
    <div class="d-block border rounded mfliud-bot">
        <div class="dashboard_author px-2 py-5">
            <div class="dash_caption">
                <h4 class="fs-md ft-medium mb-0 lh-1">{{ Auth::User()->first_name . ' ' . Auth::User()->last_name }}</h4>
            </div>
        </div>

        <div class="dashboard_author">
            <h4 class="px-3 py-2 mb-0 lh-2 gray fs-sm ft-medium text-muted text-uppercase text-left">Dashboard Navigation</h4>
            <ul class="dahs_navbar" role="tablist">
                <li><a class="nav-link @if(Route::current()->getName() == 'edit-account') active @endif" href="{{ Route('edit-account') }}"><i class="lni lni-user mr-2"></i> Edit Account details</a></li>
                <li><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="lni lni-power-switch mr-2"></i> logout</a></li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </div>

    </div>
</div>


