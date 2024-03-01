<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="{{asset('front/images/3.jpg')}}" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-form" role="form" method="post" action="{{route('order.store')}}">
                    @csrf
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Order The Item</h2>
                    </div>


                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="patient_name">Name</label>
                            <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Full Name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="select">Select Item</label>
                            <select class="form-control" name="item_id" id="itemId">
                             {{-- <select class="form-control" name="item_id" id="itemId" onchange="changeItem(this)"> --}}
                                <option value="">Select Item</option>
                                @forelse($data['_items'] as $item)
                                    <option value="{{$item->id}}">{{$item->item_name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity">
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <label for="phone_number">Phone Number</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Phone">
                            <label for="Message">Additional Message</label>
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>

                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>

</section>
