@if($site->facebook)<a target="_blank" href="{{$site->facebook}}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
@endif
@if($site->instagram)
                    <a target="_blank" href="{{$site->instagram}}">
                        <i class="fab fa-twitter"></i>
                    </a>
@endif
@if($site->twitter)
                    <a target="_blank" href="{{$site->twitter}}">
                        <i class="fab fa-instagram"></i>
                    </a>
@endif
@if($site->youtube)
                    <a target="_blank" href="{{$site->youtube}}">
                        <i class="fab fa-youtube"></i>
                    </a>
@endif