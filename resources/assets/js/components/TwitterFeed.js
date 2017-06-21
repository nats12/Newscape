import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class TwitterFeed extends Component {
	constructor() {
		super()
	}

	render() {

	
		return (
			<div>
				{
					Object.keys(this.props.timeline).map(key => <p key={key}>{this.props.timeline[key].text}</p>)
				}
			</div>
		)

	}
}



export default TwitterFeed