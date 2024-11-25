<!-- appointment modal-->
<div class="modal loginModal fade" id="appointModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body appointModal__body">
                <button type="button" class="close__modal" data-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <h3> make an appointment </h3>
                <p> When making an appointment you should give the person your name and the reason for wanting an
                    appointment. You should also ask the amount of time the appointment will take and if you should
                    expect a wait
                    time prior to the appointment. You should also ask the amount of time the appointment. </p>
                <form class="contactUs__form" action="{{route('front.services-make-appointment')}}" method="post"
                      id="submitted-form" enctype="multipart/form-data">
                    @csrf
                    <div class="appointRad_wrap">
                        <span class="absAlert_red"> *You must be registered* </span>
                        <label class="workfrom_label"> <input type="radio" class="workfrom_radio"
                                                              name="appointment_type" value="office" checked> <span> from office </span>
                        </label>
                        <label class="workfrom_label"> <input type="radio" class="workfrom_radio"
                                                              name="appointment_type" value="online">
                            <span> online </span> </label>
                    </div>
                    <div class="Cform__row">
                        <div class="col-12 col-xl-6">
                            <input type="text" class="contact__input" name="client_name" placeholder=" your name"
                                   required>
                        </div>

                        <div class="col-12 col-xl-6">
                            <input type="email" class="contact__input" name="email_address"
                                   placeholder=" email address " required>
                        </div>

                        <div class="col-12 col-xl-6">
                            <input type="datetime-local" class="contact__input" name="date" required>
                        </div>
                        <div class="col-12 col-xl-6">
                            <input type="text" class="contact__input" name="client_mobile" placeholder=" phone number "
                                   required>
                        </div>
                        <div class="col-12">
                            <textarea class="contact__input" name="problem"
                                      placeholder=" Tell us about your problem.. " required></textarea>
                        </div>
                    </div>
                    <button type="submit" id="save-form-btn"
                            class="main__btn search__btn hvr-bounce-to-right mxST_auto mbTop_10"> confirm
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
