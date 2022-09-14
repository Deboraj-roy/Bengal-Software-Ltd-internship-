<!-- 
 @forelse ($DataKey as $CountryName)
<li>{{$CountryName}}</li>

@empty
<p> No Data Found</p>

@endforelse -->
 

@forelse ($DataKey as $CountryName)
<li>{{$CountryName}}</li>

@empty
<p> No Data Found</p>

@endforelse
 