<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Items</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            @forelse($data['_items'] as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('item.detail', $item->id) }}">
                        <img src="{{asset('images/item/'.$item->image)}}" class="img-responsive" alt="" height="200px" width="500px">

                        <div class="team-info">
                            <h3>{{$item->item_name}}</h3><br>
                            <p>{{$item->rupees}}</p>
                            <div class="team-contact-info">
                                <h5>{{$item->description}}</h5><br>
                                {{-- <a href="#appointment" class="section-btn btn btn-default smoothScroll">Explore Here To Order an Item</a> --}}
                                {{-- <p><i class="fa fa-envelope-o"></i> <a href="#">{{$item->rupees}}</a></p> --}}
                            </div>
                            {{-- <ul class="social-icon">
                                <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                <li><a href="#" class="fa fa-envelope-o"></a></li>
                            </ul> --}}
                        </div>
                        </a>
                    </div>

                </div>

                @empty
            @endforelse
                <br>


        </div>
    </div>
</section>
