import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import '../../../../public/css/twitter.css'


class Tweet extends Component {
	constructor() {
		super()
	}

	render() {

		const tweet = this.props.tweet;

		return (
			<div className="small-12 large-12 columns tweet-block">
				<div className="media-object">
				  <div className="media-object-section">
				    <div className="thumbnail">
				      <img src={this.props.tweet.user.profile_image_url} alt={tweet.user.name} />
				    </div>
				  </div>
				  <div className="media-object-section">
				  	<p>{tweet.user.name} <a href={"http://twitter.com/" + tweet.user.screen_name}>@{tweet.user.screen_name}</a> {tweet.created_at}</p>
				    <p>{tweet.text}</p>
				  </div>
				</div>
			</div>
		)

	}
}

export default Tweet