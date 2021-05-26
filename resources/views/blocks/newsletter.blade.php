<div id="shopify-section-1585674376666" class="shopify-section velaFramework">
            <div class="velaNewsletter hasBg" style="background-image: url(//cdn.shopify.com/s/files/1/0376/9440/6700/files/newsletter-bg.jpg?v=1585674408);">
                <div class="container">
                    <div class="velaNewsletterInner text-center clearfix">
                        <div class="wrap">

                        @include('components.heading-group',['title'=>'Subcribe To Our Newsletter', 'subtitle'=>'Sign up for the weekly newsletter and build better ecommerce stores.'])

                            <div class="velaContent">
                                <form method="post" action="/contact#contact_form" id="contact_form"
                                      accept-charset="UTF-8" class="contact-form">
                                      <input type="hidden" name="form_type" value="customer"/><input type="hidden" name="utf8" value="✓"/>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="email" name="contact[email]"
                                               placeholder="Your email address...">
                                        <span class="input-group-btn">
                                        <button class="btnNewsletter btnVelaOne" type="submit">
                                            <span>Subscribe</span>
                                            </button>
                                            </span>
                                        <input type="hidden" name="action" value="0">
                                    </div>

                                </form>
                                <div class="newsletterDescription">We respect your privacy, so we never share your
                                    info.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>