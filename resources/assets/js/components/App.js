import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Login from './Login';
import TwitterFeed from './TwitterFeed';
import NewsSources from './NewsSources';


class App extends Component {
	constructor(props) {
		super()

		this.state = {
			timeline: window.Laravel.timeline,
			newsSources: window.Laravel.newsSources.sources
		}
	}


	render() {

		const { timeline, newsSources } = this.state;

		return (
			<div>
				<Login />
				<div className="large-8 columns">
					<NewsSources 
						newsSources={newsSources} />
				</div>
				<div className="large-4 columns">
					<div className="twitter-container">
					<TwitterFeed 
						timeline={timeline}/>
					</div>
				</div>
			</div>
		)
	}
}

export default App