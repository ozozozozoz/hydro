@extends('layouts.content')

@section('title')
    About Us | Hydro
@endsection

@section('crumbs')
    About Us
@endsection

@section('content')

    {{-- @foreach ($abouts as $about)
    
    <h1>{{ $about->Headline }}</h1><br/>
    <h3>{{ $about->P1 }}</h3>
    <p>{{ $about->P2 }}</p>
    
    @endforeach --}}
    <h4>Founded in 2001 by John Doe, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, 
        lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
        Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. 
        Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</h4>
    <br/>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, 
    auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae.</p><br/>
    <div class="photo-div">
        <ul style="list-style-type: none;font-size:21px">
            <li>
                <i class="ri-arrow-drop-right-line"></i>Certified Professionals
            </li>
            <li>
                <i class="ri-arrow-drop-right-line"></i>Former Chief Executives
            </li>
        </ul>

        <ul style="list-style-type: none;font-size:21px">
            <li>
                <i class="ri-arrow-drop-right-line"></i>Certified Professionals
            </li>
            <li>
                <i class="ri-arrow-drop-right-line"></i>Former Chief Executives
            </li>
        </ul>

        <ul style="list-style-type: none;font-size:21px">
            <li>
                <i class="ri-arrow-drop-right-line"></i>Certified Professionals
            </li>
            <li>
                <i class="ri-arrow-drop-right-line"></i>Former Chief Executives
            </li>
        </ul>
    </div>

    <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. 
        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</p>

    <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
        Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, 
        nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

    <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
        Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, 
        nisi elit consequat ipsum, nec sagittis</p>
    
    <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. 
        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</p>
    
        <div class="photo-div">
            <img src="assets/img/1.jpg" class="grid-image"/>
            <img src="assets/img/1.jpg" class="grid-image""/>
            <img src="assets/img/1.jpg" class="grid-image"/>
            {{-- <div class="photo-about portfolio-img"><img src="assets/img/1.jpg" class="img-fluid" style="width: 360px; height: 220px;"/></div></div>
            <div class="photo-about portfolio-img"><img src="assets/img/1.jpg" class="img-fluid" style="width: 360px; height: 220px;"/></div></div>
            <div class="photo-about portfolio-img"><img src="assets/img/1.jpg" class="img-fluid" style="width: 360px; height: 220px;"/></div></div> --}}
        </div>
    {{-- <table class="photo-about">
        <tr style="margin: 0 5px;">
            <td>
                <img src="assets/img/1.jpg" class="img-fluid" style="width: 360px; height: 220px;"/>
            </td>
            <td>
                <img src="assets/img/4.jpg" class="img-fluid" style="width: 360px; height: 220px;"/>
            </td>
            <td>
                <img src="assets/img/5.jpeg" class="img-fluid" style="width: 360px; height: 220px;"/>
            </td>
        </tr>
    </table> --}}
    <br/> <br/>
    <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
        Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, 
        nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
    
        <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
            Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, 
            nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
            <br/>
            <hr>
@endsection
