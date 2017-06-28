import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';


class Login extends Component {
	constructor() {
		super()
	}

	checkAuth = () => {
		const user = this.props.user;

		const auth = {
			url: user ?  this.props.logoutPage : this.props.loginPage,
			text: user ? 'Logout' : 'Login'
		}
		
		return auth;
	}

	render() {

		return (
			<div className="small-12 large-12 columns">
				<h1>Welcome to Newscape!</h1>
				<a className="button" href={this.checkAuth().url}>{this.checkAuth().text}</a>
			</div>
		)
	}
}



export default Login