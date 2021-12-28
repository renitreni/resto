<div>
    <div class="untree_co-hero overlay"
         style="background-image:url({{ asset('theme/meal/images/xhero_bg.jpg.pagespeed.ic.-1K3CGl7cF.jpg') }})">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <span class="caption" data-aos-delay="0">Enjoy Your Healthy Delicious Meal</span>
                            <h1 class="mb-4 heading text-white" data-aos-delay="100">Treat Yourself</h1>
                            <div class="mb-4 text-white desc" data-aos-delay="200">
                                <p>Another free template by <a href="../../../external.html?link=https://colorlib.com/"
                                                               target="_blank"
                                                               class="link-highlight">Colorlib</a>. Far far away, behind
                                    the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <p class="mb-0" data-aos-delay="300"><a href="#" class="btn btn-primary">Explore
                                    now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-aos-delay="0" class="scroll-down-wrap">
            <span class="scroll-down"><span>scroll down</span></span>
        </div>
        <ul class="list-unstyled social-hero-section mb-0">
            <li data-aos="fade-left" data-aos-delay="0"><a href="#"><span class="icon-whatsapp"></span></a></li>
            <li data-aos="fade-left" data-aos-delay="100"><a href="#"><span class="icon-instagram"></span></a></li>
            <li data-aos="fade-left" data-aos-delay="200"><a href="#"><span class="icon-facebook"></span></a></li>
            <li data-aos="fade-left" data-aos-delay="300"><a href="#"><span class="icon-twitter"></span></a></li>
        </ul>
    </div>
    <div class="untree_co-section bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center text-lg-left">
                    <div class="heading mb-4">
                        <span class="subtitle">Select your Meal</span>
                        <h3>Popular <strong class="text-primary">Foods</strong></h3>
                    </div>
                    <ul class="list-unstyled untree_co-tab-nav js-custom-dots">
                        <li @if($tab == 1) class="active" @endif wire:click="setTab(1)">
                            <a href="#!" class="d-flex align-items-center">
                                <img src="{{ asset('theme/meal/images/1x/xnoodles.png.pagespeed.ic.kth885rMg0.png') }}"
                                     alt="Image" class="img-fluid">
                                <span>Breakfast</span>
                            </a>
                        </li>
                        <li @if($tab == 2) class="active" @endif wire:click="setTab(2)">
                            <a href="#!" class="d-flex align-items-center">
                                <img src="{{ asset('theme/meal/images/1x/xchicken.png.pagespeed.ic.ayLxzkQ-35.png') }}"
                                     alt="Image" class="img-fluid">
                                <span>Lunch</span>
                            </a>
                        </li>
                        <li @if($tab == 3) class="active" @endif wire:click="setTab(3)">
                            <a href="#!" class="d-flex align-items-center">
                                <img src="{{ asset('theme/meal/images/1x/xhotdog.png.pagespeed.ic.NRSHCRTflr.png') }}"
                                     alt="Image" class="img-fluid">
                                <span>Dinner</span>
                            </a>
                        </li>
                        <li @if($tab == 4) class="active" @endif wire:click="setTab(4)">
                            <a href="#!" class="d-flex align-items-center">
                                <img src="{{ asset('theme/meal/images/1x/xdrinks.png.pagespeed.ic.Dc7rM7XVdo.png') }}"
                                     alt="Image" class="img-fluid">
                                <span>Drinks</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 ml-auto">
                    <div>
                        <div class="item" @if($tab == 1) @else hidden @endif>
                            <div class="row align-items-center mb-4">
                                <div class="col-6">
                                    <h2 class="text-black">Breakfast</h2>
                                </div>
                                <div class="col-6 text-right number">1/4</div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-6 mb-4">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_1.jpg.pagespeed.ic.zubXiKq0cS.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Italian Sauce Mushroom</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-4">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_2.jpg.pagespeed.ic.Xomyrfp8cT.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Salted Fried Chicken</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-0">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_3.jpg.pagespeed.ic.yKvaR7OF0S.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Fried Potato w/ Garlic</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-0">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_4.jpg.pagespeed.ic.HORSO1eABM.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Shrimp and olive</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item" @if($tab == 2) @else  hidden @endif>
                            <div class="row align-items-center mb-4">
                                <div class="col-6">
                                    <h2 class="text-black">Lunch</h2>
                                </div>
                                <div class="col-6 text-right number">2/4</div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-6 mb-4">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_1_b.jpg.pagespeed.ic.Ln1UWztVJl.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Italian Sauce Mushroom</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-4">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_2_b.jpg.pagespeed.ic.3OPPhAdaTf.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Salted Fried Chicken</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-0">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_3_b.jpg.pagespeed.ic.Uvcvi8o46c.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Fried Potato w/ Garlic</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-0">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_4.jpg.pagespeed.ic.HORSO1eABM.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Shrimp and olive</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" @if($tab == 3) @else hidden @endif>
                            <div class="row align-items-center mb-4">
                                <div class="col-6">
                                    <h2 class="text-black">Dinner</h2>
                                </div>
                                <div class="col-6 text-right number">3/4</div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-6 mb-4">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_1.jpg.pagespeed.ic.zubXiKq0cS.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Italian Sauce Mushroom</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-4">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_2.jpg.pagespeed.ic.Xomyrfp8cT.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Salted Fried Chicken</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-0">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_1.jpg.pagespeed.ic.zubXiKq0cS.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Fried Potato w/ Garlic</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-0">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_2.jpg.pagespeed.ic.Xomyrfp8cT.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Shrimp and olive</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item" @if($tab == 4) @else hidden @endif>
                            <div class="row align-items-center mb-4">
                                <div class="col-6">
                                    <h2 class="text-black">Drinks</h2>
                                </div>
                                <div class="col-6 text-right number">4/4</div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-6 mb-4">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_1_d.jpg.pagespeed.ic.G2LDKWGUO5.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Italian Sauce Mushroom</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-4">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_2_d.jpg.pagespeed.ic.yqltt0oPH2.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Salted Fried Chicken</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-0">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_3_d.jpg.pagespeed.ic.yh_6ndivDL.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Fried Potato w/ Garlic</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 mb-0">
                                    <div class="product">
                                        <a href="#" class="thumbnail"><img
                                                src="{{ asset('theme/meal/images/ximg_4_d.jpg.pagespeed.ic.245pxE1gwy.jpg') }}"
                                                alt="Image"
                                                class="img-fluid"></a>
                                        <h3><a href="#">Shrimp and olive</a></h3>
                                        <div class="d-flex">
                                            <div class="price">$19.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section pt-0">
        <div class="container">
            <div class="text-center mb-5">
                <span class="subtitle">Choose Desserts</span>
                <h3>Popular <strong class="text-primary">Desserts</strong></h3>
            </div>
            <div class="row align-items-stretch">
                <div class="col-6 col-lg-3 mb-4 mb-lg-0" data-aos-delay="0">
                    <a href="#" class="d-flex dess-item align-items-center h-100">
                        <figure class="mr-3">
                            <img src="{{ asset('theme/meal/images/1x/xdessert_1.png.pagespeed.ic.ROLSR2FRUj.png') }}"
                                 alt="Image" class="img-fluid">
                        </figure>
                        <div>
                            <h3>Cherry Muffin</h3>
                            <span class="price">$20</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-4 mb-lg-0" data-aos-delay="100">
                    <a href="#" class="d-flex dess-item align-items-center h-100">
                        <figure class="mr-3">
                            <img src="{{ asset('theme/meal/images/1x/xdessert_2.png.pagespeed.ic.tK1BQ2AbgU.png') }}"
                                 alt="Image" class="img-fluid">
                        </figure>
                        <div>
                            <h3>Rose Muffin</h3>
                            <span class="price">$20</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-4 mb-lg-0" data-aos-delay="200">
                    <a href="#" class="d-flex dess-item align-items-center h-100">
                        <figure class="mr-3">
                            <img src="{{ asset('theme/meal/images/1x/xdessert_5.png.pagespeed.ic.d97y2cxph1.png') }}"
                                 alt="Image" class="img-fluid">
                        </figure>
                        <div>
                            <h3>Sweet Donut</h3>
                            <span class="price">$20</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-4 mb-lg-0" data-aos-delay="300">
                    <a href="#" class="d-flex dess-item align-items-center h-100">
                        <figure class="mr-3">
                            <img src="{{ asset('theme/meal/images/1x/xdessert_4.png.pagespeed.ic.P4eI_9uWBr.png') }}"
                                 alt="Image" class="img-fluid">
                        </figure>
                        <div>
                            <h3>Choco Cake</h3>
                            <span class="price">$20</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section bg-img fixed overlay"
         style="background-image:url( {{ asset('theme/meal/images/xhero_bg_2.jpg.pagespeed.ic.idX1ZTc2Sk.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0 mr-auto testimonial-wrap" data-aos-delay="0">
                    <span class="subtitle">Testimonials</span>
                    <h2 class="mb-5">Satisfied <strong class="text-primary">Customers</strong></h2>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <blockquote class="block-testimonial">
                                <div class="author">
                                    <img
                                        src="{{ asset('theme/meal/images/xperson_1.jpg.pagespeed.ic.ZwOrrtC1mu.jpg') }}"
                                        alt="Free template by TemplateUX">
                                    <h3>John Doe</h3>
                                    <p class="position mb-5">CEO, Founder</p>
                                </div>
                                <p>
                                <div class="quote">&ldquo;</div>
                                &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there
                                live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a
                                large language ocean.&rdquo;
                                </p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="block-testimonial">
                                <div class="author">
                                    <img
                                        src="{{ asset('theme/meal/images/xperson_2.jpg.pagespeed.ic.9zpiy3ffbX.jpg') }}"
                                        alt="Free template by TemplateUX">
                                    <h3>James Woodland</h3>
                                    <p class="position mb-5">Designer at Facebook</p>
                                </div>
                                <p>
                                <div class="quote">&ldquo;</div>
                                &ldquo;When she reached the first hills of the Italic Mountains, she had a last view
                                back on the
                                skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline
                                of her own
                                road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued
                                her
                                way.&rdquo;
                                </p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="block-testimonial">
                                <div class="author">
                                    <img
                                        src="{{ asset('theme/meal/images/xperson_3.jpg.pagespeed.ic.OxLTnsXJun.jpg') }}"
                                        alt="Free template by TemplateUX">
                                    <h3>Rob Smith</h3>
                                    <p class="position mb-5">Product Designer at Twitter</p>
                                </div>
                                <p>
                                <div class="quote">&ldquo;</div>
                                &ldquo;A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.
                                It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">
                    <span class="subtitle">Galleries</span>
                    <h2 class="mb-5">Photo <strong class="text-primary">Galleries</strong></h2>
                    <div class="row">
                        <div class="col-6 mb-4">
                            <a href="{{ asset('theme/meal/images/img_1.jpg') }}" data-fancybox="gallery"
                               class="gal"><img
                                    src="{{ asset('theme/meal/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-6 mb-4">
                            <a href="{{ asset('theme/meal/images/img_2.jpg') }}" data-fancybox="gallery"
                               class="gal"><img
                                    src="{{ asset('theme/meal/images/img_2.jpg') }}" alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-6 mb-4">
                            <a href="{{ asset('theme/meal/images/img_1_b.jpg') }}" data-fancybox="gallery"
                               class="gal"><img
                                    src="{{ asset('theme/meal/images/img_1_b.jpg') }}" alt="Image"
                                    class="img-fluid"></a>
                        </div>
                        <div class="col-6 mb-4">
                            <a href="{{ asset('theme/meal/images/img_2_b.jpg') }}" data-fancybox="gallery"
                               class="gal"><img
                                    src="{{ asset('theme/meal/images/img_2_b.jpg') }}" alt="Image"
                                    class="img-fluid"></a>
                        </div>
                        <div class="col-12">
                            <a href="#" class="btn btn-primary">More Galleries</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-4 justify-content-center">
                <div class="col-md-7 text-center mb-5">
                    <span class="subtitle">Events</span>
                    <h2>Enjoy <strong class="text-primary">Our Events</strong></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the
                        blind texts.</p>
                </div>
            </div>
            <div class="owl-carousel">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <img src="{{ asset('theme/meal/images/xparty_1.jpg.pagespeed.ic.OtpwOJo9TJ.jpg') }}" alt="Image"
                             class="img-fluid">
                    </div>
                    <div class="col-lg-5">
                        <span class="event-price d-block">$200.99</span>
                        <h3 class="mb-4">Birthday Party</h3>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a
                            large language ocean.</p>
                        <ul class="list-unstyled ul-check">
                            <li>Away behind the word</li>
                            <li>Bookmarksgrove right at the coast</li>
                            <li>Separated they live</li>
                        </ul>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 order-lg-2">
                        <img src="{{ asset('theme/meal/images/xparty_2.jpg.pagespeed.ic.Zg3AActiY_.jpg') }}" alt="Image"
                             class="img-fluid">
                    </div>
                    <div class="col-lg-5">
                        <span class="event-price d-block">$200.99</span>
                        <h3 class="mb-4">Guest Chef Nihgt Party</h3>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a
                            large language ocean.</p>
                        <ul class="list-unstyled ul-check">
                            <li>Away behind the word</li>
                            <li>Bookmarksgrove right at the coast</li>
                            <li>Separated they live</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section bg-img py-5 fixed overlay"
         style="background-image:url({{ asset('theme/meal/images/xhero_bg_2.jpg.pagespeed.ic.idX1ZTc2Sk.jpg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <span class="subtitle">Book a table</span>
                    <h3>Book A Table Now</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the
                        blind texts. </p>
                    <p class="mb-0"><a href="book-a-table.html" class="btn btn-primary">Book a table</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>About Meal<span class="text-primary">.</span> </h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                        blind texts.</p>
                </div>
                <div class="widget">
                    <h3>Connect</h3>
                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                        <li><a href="#"><span class="icon-dribbble"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 ml-auto">
                <div class="widget">
                    <h3>Projects</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">CSS3</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Bootstrap</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="widget">
                    <h3>Services</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Front-end</a></li>
                        <li><a href="#">Code</a></li>
                        <li><a href="#">Developer</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h3>Contact</h3>
                    <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                    <ul class="list-unstyled links mb-4">
                        <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                        <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                        <li><a
                                href="../../../external.html?link=https://preview.colorlib.com/cdn-cgi/l/email-protection#bad3d4dcd5fad7c3ded5d7dbd3d494d9d5d7"><span
                                    class="__cf_email__"
                                    data-cfemail="177e797178577a6e73787a767e793974787a">[email&#160;protected]</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <p>

                    Copyright &copy;<script data-cfasync="false"
                                            src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Yaramay Maintenance Services
                </p>
            </div>
        </div>
    </div>
</div>
