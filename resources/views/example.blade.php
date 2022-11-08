@extends('shared.layout')

@section('title', 'Plans')

@section('plans')
	<div class="plans">
		<div class="plans__header">
			<h1>Plans</h1>
		</div>
		
		<div class="item__container">
			@foreach ($plans as $plan)
				<div class="plan__item">
					<div class="plan__badge">
						<a href={{ '/plans#' . $plan['id'] }}>
							<img src={{ 'images/' . $plan['badge'] }} alt="badge">
						</a>
					</div>
					@if ($plan['discount'])
						<h2 class="plan__name">{{ $plan['name'] }} (DISCOUNT)</h2>
						<p class="plan__price"><s>IDR {{ $plan['price'] }}</s> IDR {{ $plan['discountPrice'] }}</p>
					@elseif (!$plan['discount'])
						<h2 class="plan__name">{{ $plan['name'] }}</h2>
						<p class="plan__price">IDR {{ $plan['price'] }}</p>
					@endif
				</div>
			@endforeach
		</div>
	</div>
@endsection
