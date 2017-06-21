import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import '../../../../public/css/twitter.css'


class NewsSource extends Component {
	constructor() {
		super()
	}

	render() {

		const newsSource = this.props.newsSource;

		return (
			<div className="small-12 large-12 columns tweet-block">
				<div className="media-object">
				  <div className="media-object-section">
				    <div className="thumbnail">
				      <img src={newsSource.urlsToLogos.small} alt={newsSource.name} />
				    </div>
				  </div>
				  <div className="media-object-section">
				  	<h4>{newsSource.name}</h4>
				    <p>{newsSource.description}</p>
				    <p>{newsSource.url}</p>
				  </div>
				</div>
			</div>
		)

	}
}

export default NewsSource