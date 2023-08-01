@include('layouts.header')
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="{{asset('VentureWeb/contact.css')}}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="contactus.css">
    </head>
    <body>
       
        <div class="contactus__section">
            <div class="contactus__section__text">
                <h1>Contact</h1>
                <p>We transform business through the art of digitization spanning many.</p>
                <hr class="aboutafter__line">
            </div>
            <div class="contactus__section__img">
                <img src="VentureWeb/contact_us.png" alt="pic">
            </div>
        </div>

        <section class="contact__us">
            <div class="contact__us__text">
                <div class="contact__us__headertext">
                    <h2>LETS TALK<span style="color:rgb(116, 197, 218)">.</span></h2>
                    <hr class="after__line">
                    <p>
                        We are always open to discussing your Information Systems and Technology needs.
                        Let’s get the dialogue going on:
                    </p>
                </div>
    
    
              <div class="contact__form">
                <form action="" method="" class="">
                    <div class="form__row">
                        <div class="form__field">
                             <input type="text" placeholder="NAME*">
                        </div>
                        <div class="form__field">
                            <input type="text" placeholder="EMAIL*">
                       </div>
                    </div>
                    <div class="form__row">
                        <div class="form__field">
                             <input type="text" placeholder="CONTACT NUMBER*">
                        </div>
                        <div class="form__field">
                            <input type="text" placeholder="ADDRESS*">
                       </div>
                    </div>
                    <div class="from__field">
                        <textarea class="textareas" id="" cols="30" rows="10" placeholder="HOW CAN WE HELP?"></textarea>
                    </div>
                </form>
                <button>CONTACT US</button>
              </div>
            </div>
    
    
            <div class="contact__us__pic">
                <img src="https://img.freepik.com/free-photo/one-person-typing-laptop-night-generated-by-ai_188544-27872.jpg?size=626&ext=jpg"
                    alt="cloud computing">
            </div>
        </section>
    <!---------------------------contact icon section------------------------------------------------>
    <section class="contact__icon__section">
        <div class="contact__card">
            <div class="card__circ__div">
                <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
            </div>
            <h1>ADDRESS</h1>
            <P>Chakupat,Lalitpur</P>
        </div>
    
        <div class="contact__card">
            <div class="card__circ__div">
                <div class="icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>
            <h1>PHONE</h1>
            <P>9841-205966</P>
        </div>
    
    
        <div class="contact__card">
            <div class="card__circ__div">
                <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>
            <h1>EMAIL</h1>
            <P>mail@venture4tech.com</P>
        </div>
    
    
    </section>
        <script src="" async defer></script>
    </body>
</html>
@include('layouts.footer')