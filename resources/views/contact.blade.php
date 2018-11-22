    <!--CONTACT-->
    <div class="contenedor">
        <section id="contact" class="contacto">
            <div class="contacto">
                <div class="seccionestit col-12"> <h2>Contact me</h2> </div>
                <div class="container-contact100">
                    <div class="wrap-contact100">
                        <form action="{{ route('messages.store') }}" method="POST" class="contact100-form validate-form">
                            {!! csrf_field() !!}
                            <div class="wrap-input100 validate-input" data-validate="Name is required">
                                <span class="label-input100">Name</span>
                                <input id="name" class="input100" value="{{ old('name') }}" type="text" name="name" placeholder="Your name" required>
                                {{ $errors->first('name', '<span class="error">:message</span>') }}
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <span class="label-input100">Email</span>
                                <input id="email" class="input100" value="{{ old('email') }}" type="email" name="email" placeholder="Email direction" required>
                                {{ $errors->first('email', '<span class="error">:message</span>') }}
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100">
                                <span class="label-input100">Phone (Optional)</span>
                                <input id="phone" class="input100" value="{{ old('phone') }}" type="tel" name="phone" placeholder="Number phone">
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                                <span class="label-input100">Message</span>
                                <textarea id="message" class="input100" name="message" minlength="5" placeholder="Leave your message" required>{{ old('message') }}</textarea>
                                <span class="focus-input100"></span>
                                {{ $errors->first('message', '<span class="error">:message</span>') }}
                            </div>

                            <div class="container-contact100-form-btn">
                                <div class="wrap-contact100-form-btn">
                                    <div class="contact100-form-bgbtn"></div>
                                    <button type="submit" class="contact100-form-btn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="dropDownSelect1"></div>
        </section>
    </div>