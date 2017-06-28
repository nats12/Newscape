import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class Tweet extends Component {
	constructor() {
		super()

	}

	dateFormatter = (time) => {
		var date = new Date(time),
			diff = (((new Date()).getTime() - date.getTime()) / 1000),
			day_diff = Math.floor(diff / 86400);
				
		if ( isNaN(day_diff) || day_diff < 0 || day_diff >= 31 )
			return;
				
		return day_diff == 0 && (
				diff < 60 && "just now" ||
				diff < 120 && "1 minute ago" ||
				diff < 3600 && Math.floor( diff / 60 ) + " minutes ago" ||
				diff < 7200 && "1 hour ago" ||
				diff < 86400 && Math.floor( diff / 3600 ) + " hours ago") ||
			day_diff == 1 && "Yesterday" ||
			day_diff < 7 && day_diff + " days ago" ||
			day_diff < 31 && Math.ceil( day_diff / 7 ) + " weeks ago";
	}

	parseTweet = (text) => {
      // Parse URIs
      text = text.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+/, function(uri) {
      	return uri.link(uri);
      });

      // Parse Twitter usernames
      text = text.replace(/[@]+[A-Za-z0-9-_]+/, function(u) {
      	var username = u.replace("@","")
      	return u.link("http://twitter.com/"+username);
      });

		// Parse Twitter hash tags
		text = text.replace(/[#]+[A-Za-z0-9-_]+/, function(t) {
			var tag = t.replace("#","%23")
			return t.link("http://search.twitter.com/search?q="+tag);
		});
		return {__html: text};
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
				  	<p>{tweet.user.name} <a href={"http://twitter.com/" + tweet.user.screen_name}>@{tweet.user.screen_name}</a></p>
				  	<p><small>{this.dateFormatter(tweet.created_at)}</small></p>
				    <p dangerouslySetInnerHTML={this.parseTweet(tweet.text)}></p>
				  </div>
				</div>
			</div>
		)

	}
}

export default Tweet