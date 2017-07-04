import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import TwitterAuth from './TwitterAuth';
import TwitterFeed from './TwitterFeed';
import TweetForm from './TweetForm';
import NewsSources from './NewsSources';
import NewsFeed from './NewsFeed';
import Categories from './Categories';



class App extends Component {
	constructor(props) {
		super()

		this.state = {
			timeline: window.Laravel.timeline,
			newsSources: window.Laravel.newsSources.sources,
			newsArticles: window.Laravel.newsArticles,
			user: window.Laravel.user,
			loginPage: window.Laravel.loginPage,
			logoutPage: window.Laravel.logoutPage,
			tweetFormOpen: false,
			selectedArticle: {}
		}
	}

	toggleTweetForm = (tweetFormOpen) => {
		tweetFormOpen = !tweetFormOpen;
		this.setState({tweetFormOpen: tweetFormOpen}); 
	}

	selectArticle = (article) => {
		console.log(article);
		this.setState({selectedArticle: article});
	}

	updateTimeline = (tweet, article) => {

		//push tweet into timeline array;

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


	render() {

		const { timeline, newsSources, newsArticles, user, logoutPage, loginPage, tweetFormOpen } = this.state;

		return (
			<div>
				<TwitterAuth 
					user={user} 
					loginPage={loginPage} 
					logoutPage={logoutPage}
				/>

				{this.state.tweetFormOpen ? <TweetForm 
					tweetFormOpen={this.state.tweetFormOpen} 
					toggleTweetForm={this.toggleTweetForm}
					selectedArticle={this.state.selectedArticle}
				/> : '' }
				

				<div className="large-8 columns">
					<Categories />

					<NewsSources />
					
					<NewsFeed 
						newsArticles={newsArticles} 
						dateFormatter={this.dateFormatter} 
						tweetFormOpen={tweetFormOpen} 
						toggleTweetForm={this.toggleTweetForm}
						selectArticle={this.selectArticle}
					/>
				</div>
				

				<div className="large-4 columns">
					<div className="twitter-container">
					<TwitterFeed 
						timeline={timeline} />
					</div>
				</div>
			</div>
		)
	}
}

export default App