@extends('store.storeLayout')
@section('content')
    <div class="section">
        <!-- container -->


        <div class="row">
            <div class="col-sm-2 container-fluid sidebar">
                <form class="" action="#">
                    <div class="form-group">
                        <label class="form-label">Price range</label>
                        <div class="row">
                            <div class="col-sm-5">
                                <input class="form-control" placeholder="From" type="number">
                            </div>
                            <div class="col-sm-1" style="padding-top: 5px;padding-right:0px;padding-left:11px">
                                <span><b>-</b></span>
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" placeholder="To" type="number">
                            </div>
                        </div>
                    </div>
                    <hr style="border-top: 1px solid #ccc;">
                    <div class="form-group">
                        <label for="">DRM</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck1">Steam</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Origin</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Battle.Net</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Epic Games</label>
                          </div>
                    </div>
                    <hr style="border-top: 1px solid #ccc;">
                    <div class="form-group">
                        <label for="">Categories</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck1">Action</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Adventure</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Indie</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Singleplayer</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Multiplayer</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Battle Royale</label>
                          </div>
                    </div>
                    <hr style="border-top: 1px solid #ccc;">
                    <div class="form-group">
                        <label for="">Device</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck1">PC</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">PS5</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Xbox Series X</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Nintendo Switch</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">PS4</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Xbox One</label>
                          </div>
                    </div>
                    <hr style="border-top: 1px solid #ccc;">
                    <div class="form-group">
                        <label for="">More Options</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck1">Latest releases</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Pre-orders</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Trending</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="defaultCheck2">Nintendo Switch</label>
                          </div>
                    </div>

                </form>
            </div>
            <div class="col-lg-9">
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">


                        @foreach($products as $product)
                        <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <a class="add-to-cart-btn" href="{{route('user.view',['id'=>$product->id])}}">
                                <div class="product-img">
                                    <img src="{{asset('storage/' . $product->image)}}" width="95px" height="290px" alt="">
                                    <div class="product-label">
                                        <span class="new">{{$product->tag}}</span>
                                    </div>
                                </div>
                            </a>
                                <div class="product-body">
                                    <p class="product-category">{{$product->category->name}}</p>
                                    <h3 class="product-name"><a href="{{route('user.view',['id'=>$product->id])}}">{{$product->name}}</a></h3>
                                    <h4 class="product-price">{{$product->discount != null ? $product->discount : $product->price}} TND
                                         @if ($product->discount != null)
                                        <del class="product-old-price"> {{$product->price}} TND</del>
                                    @endif</h4>
                                    <div class="product-rating">
                                    </div>

                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="{{route('user.view',['id'=>$product->id])}}"><i class="fa fa-shopping-cart"></i>Purchase</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                        @endforeach
                    </div>

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    </div>
</div>
    </div>
@endsection
