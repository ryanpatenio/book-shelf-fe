@extends('layouts.app')

@section('BookShelf','Offers')

@section('content')

<section id="special-offer" class="bookshelf pb-5 mb-5">

    <div class="section-header align-center">
        <div class="title">
            <span>Grab your opportunity</span>
        </div>
        <h2 class="section-title">Books with offer</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="inner-content">
                <div class="product-list" data-aos="fade-up">
                    <div class="grid product-grid">
                        <div class="product-item">
                            <figure class="product-style">
                                <img src="{{asset('assets/images/product-item5.jpg')}}" alt="Books" class="product-item">
                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                    Cart</button>
                            </figure>
                            <figcaption>
                                <h3>Simple way of piece life</h3>
                                <span>Armor Ramsey</span>
                                <div class="item-price">
                                    <span class="prev-price">$ 50.00</span>$ 40.00
                                </div>
                            </div>
                        </figcaption>

                        <div class="product-item">
                            <figure class="product-style">
                                <img src="{{asset('assets/images/product-item6.jpg')}}" alt="Books" class="product-item">
                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                    Cart</button>
                            </figure>
                            <figcaption>
                                <h3>Great travel at desert</h3>
                                <span>Sanchit Howdy</span>
                                <div class="item-price">
                                    <span class="prev-price">$ 30.00</span>$ 38.00
                                </div>
                            </div>
                        </figcaption>

                        <div class="product-item">
                            <figure class="product-style">
                                <img src="{{asset('assets/images/product-item7.jpg')}}" alt="Books" class="product-item">
                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                    Cart</button>
                            </figure>
                            <figcaption>
                                <h3>The lady beauty Scarlett</h3>
                                <span>Arthur Doyle</span>
                                <div class="item-price">
                                    <span class="prev-price">$ 35.00</span>$ 45.00
                                </div>
                            </div>
                        </figcaption>

                        <div class="product-item">
                            <figure class="product-style">
                                <img src="{{asset('assets/images/product-item8.jpg')}}" alt="Books" class="product-item">
                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                    Cart</button>
                            </figure>
                            <figcaption>
                                <h3>Once upon a time</h3>
                                <span>Klien Marry</span>
                                <div class="item-price">
                                    <span class="prev-price">$ 25.00</span>$ 35.00
                                </div>
                            </div>
                        </figcaption>

                        <div class="product-item">
                            <figure class="product-style">
                                <img src="{{asset('assets/images/product-item2.jpg')}}" alt="Books" class="product-item">
                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                    Cart</button>
                            </figure>
                            <figcaption>
                                <h3>Simple way of piece life</h3>
                                <span>Armor Ramsey</span>
                                <div class="item-price">$ 40.00</div>
                            </figcaption>
                        </div>
                    </div><!--grid-->
                </div>
            </div><!--inner-content-->
        </div>
    </div>
</section>

<section id="subscribe">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="row">

                    <div class="col-md-6">

                        <div class="title-element">
                            <h2 class="section-title divider">Subscribe to our newsletter</h2>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="subscribe-content" data-aos="fade-up">
                            <p>Sed eu feugiat amet, libero ipsum enim pharetra hac dolor sit amet, consectetur. Elit
                                adipiscing enim pharetra hac.</p>
                            <form id="form">
                                <input type="text" name="email" placeholder="Enter your email addresss here">
                                <button class="btn-subscribe">
                                    <span>send</span>
                                    <i class="icon icon-send"></i>
                                </button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection