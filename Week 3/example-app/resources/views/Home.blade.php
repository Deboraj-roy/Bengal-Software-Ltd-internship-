<!-- 
 @forelse ($DataKey as $CountryName)
<li>{{$CountryName}}</li>

@empty
<p> No Data Found</p>

@endforelse -->
 


@if($LoginStatusKey == true)
<h1> You are Loged In.</h1>

@elseif($LoginStatusKey == false)

<h1> You are not Loged In.</h1>
@else

<h1> Login status not found.</h1>

<h1> You are Loged In.</h1>

@endif


@forelse ($DataKey as $CountryName)
<li>{{$CountryName}}</li>

@empty
<p> No Data Found</p>

@endforelse
 