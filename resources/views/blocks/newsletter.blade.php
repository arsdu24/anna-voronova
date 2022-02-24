<div id="newsletter-subscribe" class="shopify-section velaFramework">
            <div class="velaNewsletter hasBg" style="background-image: url('{{asset('img/'.$newsletter['thumbnail'])}}');">
                <div class="container">
                    <div class="velaNewsletterInner text-center clearfix">
                        <div class="wrap">
                        @include('components.heading-group',['title'=>$newsletter['title'] ?? ' ', 'subtitle'=>$newsletter['subtitle'] ?? ' '])
                            <div class="velaContent">
                                <form  id="contact_form"
                                      accept-charset="UTF-8" class="contact-form" >
                                      @csrf
                                      <input type="hidden" name="form_type" value="customer"/><input type="hidden" name="utf8" value="✓"/>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="email" id="email" name="email"
                                               placeholder="{{$newsletter['placeholder'] ?? ' '}}">
                                        <span class="input-group-btn">
                                        <button class="btnNewsletter btnVelaOne" type="submit">
                                            <span> {{$newsletter['buttonText'] ?? 'Subscribe'}} </span>
                                            </button>
                                            </span>
                                        <input type="hidden" name="action" value="0">
                                    </div>

                                </form>
                                    <div class="newsletterDescription">
                                        {!! Session::get('subscribed') !!}
                                    </div>
                                <div class="newsletterDescription">
                                    {{$newsletter['footer'] ?? ' '}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function  contactForm(){
            $('#contact_form').submit(function(e){
                e.preventDefault();
                const email = $(this).find('#email').val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '{{route("subscribeNewsletter")}}',
                    data:{
                        'email': email,
                    },
                    success:function(result) {
                       const content = $(result).find(".velaNewsletter").html();
                       $(".velaNewsletter").html(content);
                       contactForm();
                    }
                })
            })
            }
            contactForm()
        </script>
