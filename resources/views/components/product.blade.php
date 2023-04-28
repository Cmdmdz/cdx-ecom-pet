@php
    use Illuminate\Support\Facades\Storage;
@endphp


<div class="section section-padding">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mb-n6">

            <div class="col mb-6" data-aos="fade-up" data-aos-duration="1000">
                <!-- Single CTA Wrapper Start -->
                <div class="single-cta-wrapper">

                    <!-- CTA Icon Start -->
                    <div class="cta-icon">
                        <i class="ti-truck"></i>
                    </div>
                    <!-- CTA Icon End -->

                    <!-- CTA Content Start -->
                    <div class="cta-content">
                        <h4 class="title">Free Shipping</h4>
                        <p>Free shipping on all order</p>
                    </div>
                    <!-- CTA Content End -->

                </div>
                <!-- Single CTA Wrapper End -->
            </div>

            <div class="col mb-6" data-aos="fade-up" data-aos-duration="1100">
                <!-- Single CTA Wrapper Start -->
                <div class="single-cta-wrapper">

                    <!-- CTA Icon Start -->
                    <div class="cta-icon">
                        <i class="ti-headphone-alt"></i>
                    </div>
                    <!-- CTA Icon End -->

                    <!-- CTA Content Start -->
                    <div class="cta-content">
                        <h4 class="title">Online Support</h4>
                        <p>Online live support 24/7</p>
                    </div>
                    <!-- CTA Content End -->

                </div>
                <!-- Single CTA Wrapper End -->
            </div>

            <div class="col mb-6" data-aos="fade-up" data-aos-duration="1200">
                <!-- Single CTA Wrapper Start -->
                <div class="single-cta-wrapper">

                    <!-- CTA Icon Start -->
                    <div class="cta-icon">
                        <i class="ti-bar-chart"></i>
                    </div>
                    <!-- CTA Icon End -->

                    <!-- CTA Content Start -->
                    <div class="cta-content">
                        <h4 class="title">Money Return</h4>
                        <p>Back guarantee under 5 days</p>
                    </div>
                    <!-- CTA Content End -->

                </div>
                <!-- Single CTA Wrapper End -->
            </div>

        </div>
    </div>
</div>

<!-- Product Section Start -->
<div class="section position-relative">
    <div class="container">

        <!-- Section Title & Tab Start -->
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <!-- Tab Start -->
            <div class="col-12">
                <ul class="product-tab-nav nav justify-content-center mb-n3 pb-8 title-border-bottom">
                    <li class="nav-item mb-3"><a class="nav-link active" data-bs-toggle="tab"
                            href="#tab-product-all">Bestseller</a></li>
                    <li class="nav-item mb-3"><a class="nav-link" data-bs-toggle="tab"
                            href="#tab-product-featured">Sales popup</a></li>
                    <li class="nav-item mb-3"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-all">Top
                            collection</a></li>
                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <!-- Section Title & Tab End -->

        <!-- Products Tab Start -->
        <div class="row" data-aos="fade-up" data-aos-duration="1100">
            <div class="col-12">
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="tab-product-all">
                        <div class="row mb-n8">
                            @foreach ($products as $product)
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="{{ url('/', $product->id) }}" class="image">
                                                <img class="fit-image" src="{{ asset(Storage::url($product->image)) }}"
                                                    alt="{{ $product->name }}" />
                                            </a>
                                            @if ($product->discount)
                                                <span class="badges">
                                                    <span class="sale">-{{ $product->discount }}%</span>
                                                </span>
                                            @endif
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quickview"><i
                                                        class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i
                                                        class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a
                                                    href="{{ url('/', $product->id) }}">{{ $product->name }}</a>
                                            </h5>
                                            <span class="rating">
                                                <!-- Add your rating logic here -->
                                            </span>
                                            <span class="price">
                                                @if ($product->discount)
                                                    <span
                                                        class="new">${{ $product->price - $product->price * ($product->discount / 100) }}</span>
                                                    <span class="old">${{ $product->price }}</span>
                                                @else
                                                    <span class="new">${{ $product->price }}</span>
                                                @endif
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-product-featured">
                        <div class="row mb-n8">

                            <!-- Product Start -->
                            <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                <div class="product">
                                    <!-- Thumb Start  -->
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="fit-image" src="assets/images/products/medium-product/5.png"
                                                alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-18%</span>
                                        </span>
                                        <div class="action-wrapper">
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="ti-heart"></i></a>
                                            <a href="cart.html" class="action cart" title="Cart"><i
                                                    class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!-- Thumb End  -->

                                    <!-- Content Start  -->
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="price">
                                            <span class="new">$47.50</span>
                                            <span class="old">$50.00</span>
                                        </span>
                                    </div>
                                    <!-- Content End  -->
                                </div>
                            </div>
                            <!-- Product End -->

                            <!-- Product Start -->
                            <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                <div class="product">
                                    <!-- Thumb Start  -->
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="fit-image" src="assets/images/products/medium-product/6.png"
                                                alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-20%</span>
                                        </span>
                                        <div class="action-wrapper">
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="ti-heart"></i></a>
                                            <a href="cart.html" class="action cart" title="Cart"><i
                                                    class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!-- Thumb End  -->

                                    <!-- Content Start  -->
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="price">
                                            <span class="new">$58.50</span>
                                            <span class="old">$62.85</span>
                                        </span>
                                    </div>
                                    <!-- Content End  -->
                                </div>
                            </div>
                            <!-- Product End -->

                            <!-- Product Start -->
                            <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                <div class="product">
                                    <!-- Thumb Start  -->
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="fit-image" src="assets/images/products/medium-product/3.png"
                                                alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="action-wrapper">
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="ti-heart"></i></a>
                                            <a href="cart.html" class="action cart" title="Cart"><i
                                                    class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!-- Thumb End  -->

                                    <!-- Content Start  -->
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Wait, You Need This</a>
                                        </h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="price">
                                            <span class="new">$90.00</span>
                                        </span>
                                    </div>
                                    <!-- Content End  -->
                                </div>
                            </div>
                            <!-- Product End -->

                            <!-- Product Start -->
                            <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                <div class="product">
                                    <!-- Thumb Start  -->
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="fit-image" src="assets/images/products/medium-product/7.png"
                                                alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="action-wrapper">
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="ti-heart"></i></a>
                                            <a href="cart.html" class="action cart" title="Cart"><i
                                                    class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!-- Thumb End  -->

                                    <!-- Content Start  -->
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">This is the testing</a>
                                        </h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="price">
                                            <span class="new">$78.50</span>
                                        </span>
                                    </div>
                                    <!-- Content End  -->
                                </div>
                            </div>
                            <!-- Product End -->

                            <!-- Product Start -->
                            <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                <div class="product">
                                    <!-- Thumb Start  -->
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="fit-image" src="assets/images/products/medium-product/8.png"
                                                alt="Product" />
                                        </a>
                                        <div class="action-wrapper">
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="ti-heart"></i></a>
                                            <a href="cart.html" class="action cart" title="Cart"><i
                                                    class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!-- Thumb End  -->

                                    <!-- Content Start  -->
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a>
                                        </h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="price">
                                            <span class="new">$55.00</span>
                                        </span>
                                    </div>
                                    <!-- Content End  -->
                                </div>
                            </div>
                            <!-- Product End -->

                            <!-- Product Start -->
                            <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                <div class="product">
                                    <!-- Thumb Start  -->
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="fit-image" src="assets/images/products/medium-product/1.png"
                                                alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-18%</span>
                                        </span>
                                        <div class="action-wrapper">
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="ti-heart"></i></a>
                                            <a href="cart.html" class="action cart" title="Cart"><i
                                                    class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!-- Thumb End  -->

                                    <!-- Content Start  -->
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">An Animal Album</a></h5>
                                        <span class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="price">
                                            <span class="new">$80.50</span>
                                            <span class="old">$85.80</span>
                                        </span>
                                    </div>
                                    <!-- Content End  -->
                                </div>
                            </div>
                            <!-- Product End -->

                            <!-- Product Start -->
                            <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                <div class="product">
                                    <!-- Thumb Start  -->
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="fit-image" src="assets/images/products/medium-product/2.png"
                                                alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-20%</span>
                                        </span>
                                        <div class="action-wrapper">
                                            <a href="#/" class="action quickview" title="Quickview"
                                                data-bs-toggle="modal" data-bs-target="#quick-view"><i
                                                    class="ti-plus"></i></a>
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="ti-heart"></i></a>
                                            <a href="cart.html" class="action cart" title="Cart"><i
                                                    class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!-- Thumb End  -->

                                    <!-- Content Start  -->
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Animal For Life</a></h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="price">
                                            <span class="new">$75.50</span>
                                            <span class="old">$82.85</span>
                                        </span>
                                    </div>
                                    <!-- Content End  -->
                                </div>
                            </div>
                            <!-- Product End -->

                            <!-- Product Start -->
                            <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                <div class="product">
                                    <!-- Thumb Start  -->
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="fit-image" src="assets/images/products/medium-product/4.png"
                                                alt="Product" />
                                        </a>
                                        <div class="action-wrapper">
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="ti-heart"></i></a>
                                            <a href="cart.html" class="action cart" title="Cart"><i
                                                    class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!-- Thumb End  -->

                                    <!-- Content Start  -->
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Pet Food Corner</a></h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="price">
                                            <span class="new">$105.00</span>
                                        </span>
                                    </div>
                                    <!-- Content End  -->
                                </div>
                            </div>
                            <!-- Product End -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Products Tab End -->
    </div>
</div>
<!-- Product Section End -->
