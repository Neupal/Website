<div class="contact__form">
                <form action="{{url('/storing')}}" method="post" class="">
                    @csrf
                    <div class="form__row">
                        <div class="form__field">
                             <input type="text" id="name" name="name" placeholder="NAME*">
                        </div>
                        <div class="form__field">
                            <input type="text" id="email" name="email" placeholder="EMAIL*">
                       </div>
                    </div>
                    <div class="form__row">
                        <div class="form__field">
                             <input type="text" id="contact" name="contact" placeholder="CONTACT NUMBER*">
                        </div>
                        <div class="form__field">
                            <input type="text" id="address" name="address" placeholder="ADDRESS*">
                       </div>
                    </div>
                    <div class="from__field">
                        <textarea class="textareas" id="description" name="description" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                    <button type="submit">CONTACT US</button>
                </form>
              </div>
