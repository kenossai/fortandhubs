<div class="appoinment-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="appoinment-wrapper-one-start">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Hello</span>
                            <span class="pre">Make An Appointment</span>
                            <h2 class="title">Make Request</h2>
                        </div>
                        <form id="appointment-form">
                            @csrf
                            <div class="single-input-wrapper">
                                <div class="single-input">
                                    <input name="name" type="text" placeholder="Your Name">
                                </div>
                                <div class="single-input">
                                    <input name="phone" type="number" placeholder="Number">
                                </div>
                                <div class="single-input">
                                    <input name="appointment_date" type="date" placeholder="Date">
                                </div>
                            </div>
                            <div class="single-input">
                                <input name="email" type="email" placeholder="Your Email">
                            </div>
                            <div class="single-input">
                                <input name="subject" type="text" placeholder="Subject">
                            </div>
                            <div class="single-input mb--30">
                                <textarea name="message" placeholder="Type Your Message"></textarea>
                            </div>
                            <button type="submit" class="rts-btn btn-primary">Make Booking</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="appoinment-thumbnail">
                        <img loading="lazy" src="assets/images/appoinment/01.webp" alt="appoinment">
                    </div>
                </div>
            </div>
        </div>
    </div>
