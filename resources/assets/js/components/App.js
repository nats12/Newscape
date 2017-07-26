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
			categories: window.Laravel.categories,
			savedCategories: [],
			menuIsOpen: false,
			sources: window.Laravel.sources,
			selectedSources: [],
			savedSources: [],
			languages: window.Laravel.languages,
			selectedLanguages: [],
			savedLanguages:[]
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

		//if in array AND checked is false, splice from array
		if ((selectedArray.indexOf(category) !== -1) && isChecked == false) {
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

	selectSource = (component, checked) => {
		let selectedArray = [...this.state.selectedSources];
		const id = component.props.source.id;
		const source = component.props.source;
		const index = selectedArray.indexOf(source);
		const isChecked = checked;

		//if in array AND checked is false, splice from array
		if ((selectedArray.indexOf(source) !== -1) && isChecked == false) {
			selectedArray.splice(index,1);
		}
		//else if not in array AND checked is true, push into array
		else if ((selectedArray.indexOf(source) == -1) && isChecked == true) {
			console.log('push',source);
			selectedArray.push(source);
		}
		//else if in array AND true, do nothing, just return
		else {
			return
		}
		this.setState({selectedSources: selectedArray});
	}

	selectLanguage = (component, checked) => {
		let selectedArray = [...this.state.selectedLanguages];
		const id = component.props.language.id;
		const language = component.props.language;
		const index = selectedArray.indexOf(language);
		const isChecked = checked;

		console.log(isChecked);
		//if in array AND checked is false, splice from array
		if ((selectedArray.indexOf(language) !== -1) && isChecked == false) {
			console.log('splice',language);
			selectedArray.splice(index,1);
		}
		//else if not in array AND checked is true, push into array
		else if ((selectedArray.indexOf(language) == -1) && isChecked == true) {
			console.log('push',language);
			selectedArray.push(language);
		}
		//else if in array AND true, do nothing, just return
		else {
			return
		}
		this.setState({selectedLanguages: selectedArray});
	}

	saveData = () => {
		let categories = this.state.selectedCategories.map( (category, index) => {
			return category.id;
		});

		let sources = this.state.selectedSources.map( (source, index) => {
			return source.id;
		});

		let languages = this.state.selectedLanguages.map( (language, index) => {
			return language.id;
		});

		const menuIsOpen = this.state.menuIsOpen;

		axios.post('/api/category', {
		      categories: categories,
		      user: this.state.user
		    })
		    .then(response => {
		      console.log(response);
		      this.setState({
		      	savedCategories: response.data.categories,
		      	menuIsOpen: menuIsOpen ? false : true })
		    })
		    .catch(error => {
		      console.log(error);
		    });

		axios.post('/api/source', {
        	sources: sources,
        	user: this.state.user
	      	})
	      	.then(response => {
	        	console.log(response);
	        	this.setState({
	        		savedSources: response.data.sources,
	        		menuIsOpen: menuIsOpen ? false : true
	        	});
	      	})
	      	.catch(error => {
	       	console.log(error);
	      	});

	  axios.post('/api/language', {
	        languages: languages,
	        user: this.state.user
	      })
	      .then(response => {
	        console.log(response);
	        this.setState({
	        	savedLanguages: response.data.languages, 
	        	menuIsOpen: menuIsOpen ? false : true 
	        })
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
				savedCategories,
				menuIsOpen,
				sources,
				languages
				} = this.state;

		return (
			<div className={tweetFormOpen ? 'overlay' : ''}>

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
						<div className="large-8 medium-7 columns">
		          <div className="options-menu">
		            <span className="icon-cog">News</span>
		            <span className={ menuIsOpen ? 'icon-up-open-big' : 'icon-down-open-big'} onClick={() => this.setState({menuIsOpen: menuIsOpen ? false : true})}></span>
		          </div>
          	</div>

    				<div className="large-4 medium-5 columns">
    					<div className="twitter-options">
				        <div className="options-menu">
				          <span className="icon-cog">Twitter</span>
				          <span className={ menuIsOpen ? 'icon-up-open-big' : 'icon-down-open-big'} onClick={() => this.setState({menuIsOpen: menuIsOpen ? false : true})}></span>
				        </div>
		        	</div>
		     		</div>

						<Filter
							selectedCategories={selectedCategories} 
							selectCategory={this.selectCategory}
							getData={this.getData}
							categories={categories}
							user={user}
							menuIsOpen={menuIsOpen}
							sources={sources}
							selectSource={this.selectSource}
							logoutPage={logoutPage}
							languages={languages}
							selectLanguage={this.selectLanguage}
						/>
					</div>
					{
						menuIsOpen && user ?
							<div className="save" onClick={this.saveData}>
				        <span className="icon-ok-1">Save</span>
				      </div>
				        :
				        	''
					}
				</div>


				<div className="row small-collapse medium-uncollapse large-uncollapse">
					<div className="large-8 medium-7 columns">

						
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
					<div className="large-4 medium-5 columns">
						<div className="twitter-container">
							<TwitterFeed 
								timeline={timeline}
								user={user} />
						</div>
					</div>
				</div>
			</div>
		)
	}
}

export default App