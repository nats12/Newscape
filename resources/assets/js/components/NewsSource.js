import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class NewsSource extends Component {
	constructor() {
		super()
	}

	render() {

		return (
			<div className="large-2 medium-3 columns end">
				<div className="news-source">
					<label>
			        	<input data-id={this.props.source.id} className="source-checkbox" onChange={this.props.selectSource} type="checkbox"/>
			        	<img className="source-icon" src={this.props.source.logoUrl} alt={this.props.source.name}/>
			    	</label>
			    	<small>{this.props.source.name}</small>
				</div>

			</div>
		)

	}
}

export default NewsSource