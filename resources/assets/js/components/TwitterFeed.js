import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Tweet from './Tweet';


class TwitterFeed extends Component {
	constructor() {
		super()
	}

	render() {

		if (this.props.timeline) {
			return (
				<div className="row">
					<div>
						{
							Object.keys(this.props.timeline)
							.map(key => <Tweet key={key} tweet={this.props.timeline[key]} />)
						}
					</div>
				</div>
			)
		}
	}
}



export default TwitterFeed