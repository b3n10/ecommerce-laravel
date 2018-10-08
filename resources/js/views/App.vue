<template>
	<div>
		<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
			<div class="container">
				<router-link :to="{ name: 'home' }" class="navbar-brand">Ben's Store</router-link>
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggle-icon"></span>
				</button>
			</div>
		</nav>
	</div>
</template>
