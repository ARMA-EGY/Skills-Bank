<h2>Hi,</h2>
<br>

<b>Thanks for booking! You’re all set now, We’ll call you in the next 24 hours to inform you all the details</b>
<br>
<b>Talk to you soon, have a great day!</b>
<br>
<b>If you have any questions , feel free to get in touch as below</b>
<br>
<b>M: (002) 01012769079</b>
<br>
<b>Email: elearning@skillsbankme.com</b>
<br>
<br>
<br>
<b>Here you will find your booking details:</b>
<br>

<b></b>{{$mt->name}}
<br>

@foreach($mt->meeting as $meeting)
    <b>Join Link : </b>{{$meeting->url}}
    <br>
    <br>
@endforeach

@if($mt->type == 'Class Room')
<b>Where: Class Room</b>
<br>
@else
<b>Where: Online Training (Virtual Through Zoom )</b>
<br>
@endif


<b>Price: </b>{{$mt->price}} L.E
<br>



<b>Full Name: </b>{{$customer->name}}
<br>

<b>Email: </b>{{$customer->email}}
<br>

<b>Phone Number: </b>{{$customer->phone}}
<br>

<b>Position: </b>{{$customer->position}}
<br>

<b>Company: </b>{{$customer->company}}
<br>
<br>
<br>
<br>

Thank You