import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Tweet from './Tweet';


class TwitterFeed extends Component {
	constructor() {
		super()
	}

	render() {
		
		return (
			<div className="row">
				{	
					this.props.timeline && this.props.user ?
					<div>
						{
							Object.keys(this.props.timeline)
							.map(key => <Tweet key={key} tweet={this.props.timeline[key]} />)
						}
					</div>
					: 
					<h2><span>Sign in</span> to use this feature</h2>
				}
			</div>
		)
	}
}



export default TwitterFeed