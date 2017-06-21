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
			<div className="small-12 large-12 columns">
				<h1>Welcome to Newscape!</h1>
				<a className="button" href={laravel}>Login</a>
			</div>
		)

	}
}



export default Login