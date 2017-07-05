import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class NewsSource extends Component {
	constructor() {
		super()
	}

	render() {

		return (
			<p>{this.props.source.name}</p>
		)

	}
}

export default NewsSource