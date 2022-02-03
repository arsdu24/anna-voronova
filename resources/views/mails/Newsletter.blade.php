@component('mail::message',['site'=>$site,'article'=>$article])
@section('header')
    <h1>We are grateful that you subscribe to our neswletter!</h1>
@endsection

    <table width="100%">
        <tr width="100%">
            <td class="image-container" width="50%">
                <div>
                    <img src="{{asset('img/'.$article->thumbnail)}}"/>
                </div>
            </td>
            <td width="50%">
                <table width="100%">
                    <tr>
                        <td align="center"><h2 align="center" style="text-align: center;">{{$article->title}}</h2></td>
                    </tr>
                    <tr>
                        <td align="center">
                            @component('mail::button', ['url' => route('blogPage',['article'=>$article->slug])])
                                View Article
                            @endcomponent
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    

@component('mail::subcopy')
<td class="bg-dark"  align="center">
    <div class="row">
        <table  width="100%">
            <tr>
                <td align="center">
                    <h5>{{$site->address}}</h5>
                </td>
            </tr>
            <tr>
                <td align="center">
                    @if($site->facebook)
                    <a target="_blank" href="{{$site->facebook}}">
                        <img class="social-logo" src="https://i.imgur.com/Yy4HM7g.png" alt="facebook"/>
                    </a>      
                    @endif
                    @if($site->instagram)
                    <a target="_blank" href="{{$site->instagram}}">
                        <img class="social-logo"  src="https://i.imgur.com/nGiNT4t.png" alt="facebook"/>
                    </a>
                    @endif
                    @if($site->twitter)
                    <a target="_blank" href="{{$site->twitter}}">
                        <img class="social-logo"  src="https://i.imgur.com/c5bYMHF.png" alt="facebook"/>
                    </a>
                    @endif
                    @if($site->youtube)
                    <a target="_blank" href="{{$site->youtube}}">
                        <img class="social-logo"  src="https://i.imgur.com/ouDn3zT.png" alt="facebook"/>
                    </a>
                    @endif
                </td>
            </tr>
            <tr>
                <td  align="center"><h6>You can <a href="{{route('unsubscribe',['token'=>$token])}}">click here to Unsubscribe</a> from this email</h6></td>
            </tr>
        </table>
    </div>
</td>
@endcomponent

@endcomponent
