import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class NewsSource extends Component {
	constructor() {
		super()
	}

	truncateLogoUrl = () => {

		const url = this.props.newsSource.url;

		const truncatedUrl = `http://logo.clearbit.com/${url.split("//")[1].split('/')[0]}`; 

		return truncatedUrl;
	}


	render() {

		const newsSource = this.props.newsSource;

		return (
			<div className="small-12 large-12 columns tweet-block">
				<div className="media-object">
				  <div className="media-object-section">
				    <div className="thumbnail">
				      <img src={this.truncateLogoUrl()} alt={newsSource.name} />
				    </div>
				  </div>
				  <div className="media-object-section">
				  	<h4>{newsSource.name}</h4>
				    <p>{newsSource.description}</p>
				    <p><a href={newsSource.url} target="_blank">{newsSource.url}</a></p>
				  </div>
				</div>
			</div>
		)

	}
}

export default NewsSource