
<!--Modal Launch Button-->
<button type="button" class="btn btn-info btn-lg openmodal" data-toggle="modal" data-target="#myModal">Give us Feedback</button>

<!--Division for Modal-->
<div id="myModal" class="modal fade" role="dialog">

    <!--Modal-->
    <div class="modal-dialog">

        <!--Modal Content-->
        <div class="modal-content">

            <!-- Modal Header-->
            <div class="modal-header">
                <h3>Feedback</h3>

                <!--Close/Cross Button-->
                <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
            </div>

            <!-- Modal Body-->
            <div class="modal-body text-center">
                <i class="far fa-file-alt fa-4x mb-3 animated rotateIn icon1"></i>
                <h3>Your opinion matters!!!</h3>
                <h5>Help us improve our services? <strong>Give us Feedback</strong></h5>
                <hr>
                <h5>Your Rating</h5>
            </div>

            <!-- Radio Buttons for Rating-->
            <form id="appointment-form" role="form" method="post" action="{{route('feedback.store')}}">
                @csrf
            <div class="form-check mb-4">
                <input name="feedback" type="radio" value="v good">
                <label class="ml-3">Very good</label>
            </div>
            <div class="form-check mb-4">
                <input name="feedback" type="radio" value="good">
                <label class="ml-3">Good</label>
            </div>
            <div class="form-check mb-4">
                <input name="feedback" type="radio" value="Mediocre">
                <label class="ml-3">Mediocre</label>
            </div>
            <div class="form-check mb-4">
                <input name="feedback" type="radio" value="Bad">
                <label class="ml-3">Bad</label>
            </div>
            <div class="form-check mb-4">
                <input name="feedback" type="radio"  value="Very Bad">
                <label class="ml-3">Very Bad</label>
            </div>
                <!--Text Message-->
                <div class="text-center">
                    <h4>What could we improve?</h4>
                </div>

                <textarea name="message" type="textarea" placeholder="Your Message" rows="3"></textarea>


                <div class="modal-footer">
                    <button type="submit"  class="btn btn-primary">Send
                        <i class="fa fa-paper-plane"></i>
                    </button>
                    <a href="" class="btn btn-outline-primary" data-dismiss="modal">Cancel</a>
                </div>
            </form>




            <!-- Modal Footer-->
