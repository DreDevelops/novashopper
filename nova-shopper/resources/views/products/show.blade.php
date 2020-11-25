@extends('layouts.app')

@section('content')
	<div class="uk-section">
		<div class="uk-container">
			<div uk-grid>
				<div class="uk-width-1-5@m">
					<div class="uk-container">
						<ul class="uk-list uk-list-divider">
						    <li>List item 1</li>
						    <li>List item 2</li>
						    <li>List item 3</li>
						</ul>
					</div>
				</div>
				<div class="uk-width-expand@m">
						@include('products.breadcrumbs')
						<div>
							@include('products.detail')
						</div>
				</div>
			</div>
			
		</div>
	</div>
@endsection