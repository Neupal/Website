<form action="{{url('/fan')}}" method="post">
        @csrf
        <div class="about__section">
        <div class="about">
            <div class="about__text">
        <h3>
          {{$title}}
        </h3>