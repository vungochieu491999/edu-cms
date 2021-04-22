@if (Auth::check())
    @if(Auth::user()->hasAccess('dashboard.index'))
        <div style="background-color: #0f6674; margin: 4px; padding: 2px; font-weight: bold; text-align: center;">
            Access For Admin <a href="{{route('dashboard.index')}}" target="_blank">Dashboard</a>
        </div>
    @endif
@endif

<a href="{{route('public.member.login')}}"> Login </a>
<br>
<a href="{{route('public.member.register')}}"> Register </a>
<br>
<a href="{{route('public.member.logout')}}"> Logout </a>
