import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class NewsSource extends Component {
	constructor() {
		super()
	}

	render() {

		return (
			<label>
	        	<input data-id={this.props.source.id} className="source-checkbox" onChange={this.props.selectSource} type="checkbox"/>
	        	<img className="source-icon" src={this.props.source.logoUrl} alt={this.props.source.name}/>
	      </label>
		)

	}
}

export default NewsSource