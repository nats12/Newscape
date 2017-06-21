import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class Tweet extends Component {
	constructor() {
		super()
	}

	render() {

	
		return (
			<div>
				<p>{this.props.tweet.text}</p>
			</div>
		)

	}
}



export default Tweet