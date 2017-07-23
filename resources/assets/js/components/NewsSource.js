import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class NewsSource extends Component {
	constructor() {
		super()
	}

	render() {

		return (
			<div className="large-12 medium-12 columns end">
				<div className="news-source">
					<label>
						{this.props.source.name}
			        	<input data-id={this.props.source.id} className="source-checkbox" onChange={this.props.selectSource} type="checkbox"/>
			    	</label>
				</div>

			</div>
		)

	}
}

export default NewsSource