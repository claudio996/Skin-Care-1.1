@include('layouts.header')
<div class="section padding_layout_1 product_list_main">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    @foreach ($promociones as $promocion)
                        <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
                            <div class="product_list">
                                <div class="product_img"> <img class="img-responsive" src="{{ asset($promocion->url_imagen) }}"
                                        alt=""> </div>
                                <div class="product_detail_btm">
                                    <div class="center">
                                        <h4><a href="it_shop_detail.html">{{ $promocion->nombre }}</a></h4>
                                    </div>
                                    <div class="starratin">
                                        <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i
                                                class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                                aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                                class="fa fa-star-o" aria-hidden="true"></i> </div>
                                    </div>
                                    <div class="product_price">
                                        <p><span class="old_price">{{ $promocion->precio_min_sesion }}</span> – <span class="new_price">{{ $promocion->precio_max_sesion}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <div class="side_bar">
                    <div class="side_bar_blog">
                        <h4>SEARCH</h4>
                        <div class="side_bar_search">
                            <div class="input-group stylish-input-group">
                                <input class="form-control" placeholder="Search" type="text">
                                <span class="input-group-addon">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="side_bar_blog">
                        <h4>GET A QUOTE</h4>
                        <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea eius
                            elitr consequ unturimperdiet.</p>
                        <a class="btn sqaure_bt" href="it_service.html">View Service</a>
                    </div>
                    <div class="side_bar_blog">
                        <h4>OUR SERVICE</h4>
                        <div class="categary">
                            <ul>
                                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data
                                        recovery</a></li>
                                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer
                                        repair</a></li>
                                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile
                                        service</a></li>
                                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network
                                        solutions</a></li>
                                <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical
                                        support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="side_bar_blog">
                        <h4>RECENT NEWS</h4>
                        <div class="categary">
                            <ul>
                                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Land lights let
                                        be divided</a></li>
                                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Seasons over
                                        bearing air</a></li>
                                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Greater open
                                        after grass</a></li>
                                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Gathered was
                                        divide second</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="side_bar_blog">
                        <h4>TAG</h4>
                        <div class="tags">
                            <ul>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">HTML5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
