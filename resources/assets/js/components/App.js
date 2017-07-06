import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import TwitterAuth from './TwitterAuth';
import TwitterFeed from './TwitterFeed';
import TweetForm from './TweetForm';
import NewsFeed from './NewsFeed';
import Filter from './Filter';
import axios from 'axios';

class App extends Component {
	constructor(props) {
		super(props)

		this.state = {
			timeline: window.Laravel.timeline,
			newsSources: window.Laravel.newsSources.sources,
			newsArticles: window.Laravel.newsArticles,
			user: window.Laravel.user,
			loginPage: window.Laravel.loginPage,
			logoutPage: window.Laravel.logoutPage,
			tweetFormOpen: false,
			selectedArticle: {},
			selectedCategories: [],
			categories: [],
			savedCategories: []
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

	updateTimeline = (array) => {

		this.setState({timeline: array});

	}

	selectCategory = (component, checked) => {
		let selectedArray = [...this.state.selectedCategories];
		const id = component.props.category.id;
		const category = component.props.category;
		const index = selectedArray.indexOf(category);
		const isChecked = checked;


		console.log(isChecked);
		//if in array AND checked is false, splice from array
		if ((selectedArray.indexOf(category) !== -1) && isChecked == false) {
			console.log('splice',category);
			selectedArray.splice(index,1);
		}
		//else if not in array AND checked is true, push into array
		else if ((selectedArray.indexOf(category) == -1) && isChecked == true) {
			console.log('push',category);
			selectedArray.push(category);
		}
		//else if in array AND true, do nothing, just return
		else {
			return
		}
		this.setState({selectedCategories: selectedArray});
	}

	getCategories = () => {
	  axios.get('/api/categories')
	    .then(response => {
	      // const categories = {...this.state.categories};
	      this.setState({categories: response.data.categories});
	    })
	    .catch( error => {
	      console.log(error);
	    });
	}

	saveCategories = () => {
		let categories = this.state.selectedCategories.map( (category, index) => {
			return category.id;
		});

	  axios.post('/api/category', {
	      categories: categories
	    })
	    .then(response => {
	      console.log(response);
	      this.setState({savedCategories: response.data.categories })
	    })
	    .catch(error => {
	      console.log(error);
	    });
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

		const { timeline, 
				newsSources, 
				newsArticles, 
				user, 
				logoutPage, 
				loginPage, 
				tweetFormOpen, 
				selectedCategories,
				categories,
				savedCategories
				} = this.state;

		return (
			<div>

				<div className="top-bar">
					<div className="row">
						  	<div className="top-bar-left">
						    	<ul className="menu">
						    	<li className="menu-text"><h1>Newscape</h1></li>
						    </ul>
						  	</div>
						  	<div className="top-bar-right">
						  	<ul className="menu">
						        <li className="menu-text">
						        	<TwitterAuth 
										user={user} 
										loginPage={loginPage} 
										logoutPage={logoutPage}
									/>
								</li>
						    </ul>
						  </div>
					</div>
				</div>

				{this.state.tweetFormOpen ? <TweetForm 
					tweetFormOpen={this.state.tweetFormOpen} 
					toggleTweetForm={this.toggleTweetForm}
					selectedArticle={this.state.selectedArticle}
					user={user}
					timeline={timeline}
					updateTimeline={this.updateTimeline}
				/> : '' }
				
				<div className="section-filter">
					<div className="row">
						<Filter
							selectedCategories={selectedCategories} 
							selectCategory={this.selectCategory}
							getCategories={this.getCategories}
							saveCategories={this.saveCategories}
							categories={categories}
						/>
					</div>
					<br/>
				</div>


				<div className="row">
					<div className="large-8 columns">

						
						<NewsFeed 
							newsArticles={newsArticles} 
							dateFormatter={this.dateFormatter} 
							tweetFormOpen={tweetFormOpen} 
							toggleTweetForm={this.toggleTweetForm}
							selectArticle={this.selectArticle}
							selectedCategories={selectedCategories}
							categories={categories}
							savedCategories={savedCategories}
							user={user}
						/>
					</div>
					<div className="large-4 columns">
						<div className="twitter-container">
						<TwitterFeed 
							timeline={timeline} />
						</div>
					</div>
				</div>
			</div>
		)
	}
}

export default App