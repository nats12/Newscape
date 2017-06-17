import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class App extends Component {
	constructor() {
		super()

		this.state = {
			laravel: window.Laravel
		}
	}


	render() {

		const laravel = this.state.laravel.loginPage;


		return (
			<div>
				<h1>Test component!</h1>
				<a href={laravel}>Login</a>
			</div>
		)

	}
}



export default App