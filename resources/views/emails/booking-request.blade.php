<h2>Hi,</h2>
<br>

<b>New student made a course request</b>
<br>
<b>Kindly take an action on this request</b>
<br>
<br>
<br>
<br>
<b>booking details:</b>
<br>

<b></b>{{$mt[0]->course->name}}
<br>


<b>Join Link : </b>{{$mt[0]->url}}
<br>

@if($mt[0]->course->type == 'Class Room')
<b>Where: Class Room</b>
<br>
@else
<b>Where: Online Training (Virtual Through Zoom )</b>
<br>
@endif


<b>Price: </b>{{$mt[0]->course->price}} L.E
<br>


Student Information
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

Thank You