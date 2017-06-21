import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class Login extends Component {
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
				<h1>Welcome to Newscape!</h1>
				<p>BLAH</p>
				<a href={laravel}>Login</a>
			</div>
		)

	}
}



export default Login