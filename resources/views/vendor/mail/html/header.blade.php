<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
    @isset($site)
        <img class="logo" src="{{asset('img/'.$site->full_logo)}}"><br>
        {{$slot}}
    @endisset
</a>
</td>
</tr>
