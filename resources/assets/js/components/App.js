import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Login from './Login';
import TwitterFeed from './TwitterFeed';


class App extends Component {
	constructor(props) {
		super()

		this.state = {
			timeline: window.Laravel.timeline
		}
	}


	render() {

		const { timeline } = this.state;

		return (
			<div>
				<Login />
				<TwitterFeed 
					timeline={timeline}/>
			</div>
		)
	}
}

export default App