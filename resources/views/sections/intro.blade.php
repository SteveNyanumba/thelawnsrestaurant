<section class="nos-intro" style="margin-top: -16em;">
    <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex nos-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>000 (123) 456 7890</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex nos-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>198 West 21th Street</h3>
                            <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex nos-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Open Monday-Friday</h3>
                            <p>8:00am - 9:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book p-4">
                <h3>Book a Table</h3>
                <form id="bookingForm" class="appointment-form">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input required type="text" name="full_name" id="booking_full_name" class="form-control" placeholder="Full Name" @if (auth()->user())
                        value="{{ auth()->user()->name}}"
                            @endif>
                        </div>

                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input required type="date" id="booking_date" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group ml-md-5">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input required type="time" name="time" id="booking_time" class="form-control">
                            </div>
                        </div>
                        <div class="form-group ml-md-5">
                            <input required type="text" name="phone" id="booking_phone" class="form-control" placeholder="Phone">
                            <div class="icon"><span class="ion-ios-call-outline"></span></div>
                        </div>
                        <div class="form-group ml-md-2">
                            <input required type="number" value="2" name="people" id="booking_people" class="form-control"/>
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group ml-md-5" >
                            <textarea required name="message" id="booking_message" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                        </div>

                    </div>
                    <div class="d-md-flex m-4">
                        <div class="form-group ml-md-2">
                            <input required type="submit" value="Book Now" class="btn btn-white py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
