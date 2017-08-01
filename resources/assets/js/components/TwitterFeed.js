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
					: ''
				}
			</div>
		)
	}
}



export default TwitterFeed