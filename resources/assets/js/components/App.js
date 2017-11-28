import React, { Component } from 'react';
import { CSSTransitionGroup } from 'react-transition-group';

import TopBar from './TopBar';
import ApiDown from './ApiDown';
import TwitterFeed from './TwitterFeed';
import TweetForm from './TweetForm';
import NewsFeed from './NewsFeed';
import Filter from './Filter';
import Errors from './Errors';

class App extends Component {
	constructor(props) {
		super(props)

		this.state = {
			timeline: window.Laravel.timeline,
			// newsSources: window.Laravel.newsSources.sources,
			newsArticles: window.Laravel.newsArticles,
			user: window.Laravel.user,
			loginPage: window.Laravel.loginPage,
			logoutPage: window.Laravel.logoutPage,
			tweetFormOpen: false,
			selectedArticle: {},
			selectedCategories: window.Laravel.selectedCategories,
			categories: window.Laravel.categories,
			savedCategories: [],
			menuIsOpen: false,
			twitterFeedOpen: window.Laravel.user ? true : false,
			sources: window.Laravel.sources,
			selectedSources: window.Laravel.selectedSources,
			savedSources: [],
			languages: window.Laravel.languages,
			selectedLanguages: window.Laravel.selectedLanguages,
			savedLanguages:[],
			search: '',
			errors: []
		}		
	}

	componentDidUpdate() {
		this.setFeedHeight();
	}

	toggleTweetForm = (tweetFormOpen) => {
		tweetFormOpen = !tweetFormOpen;
		this.setState({tweetFormOpen: tweetFormOpen}); 
	}

	toggleTwitterFeed = (twitterFeedOpen) => {
		this.setState({twitterFeedOpen: twitterFeedOpen}); 
	}

	toggleMenu = () => {
		let menuIsOpen = this.state.menuIsOpen;
		this.setState({menuIsOpen: !menuIsOpen});
	}

	toggleErrors = () => {
		this.setState({errors: []});
	}

	updateErrors = (array) => {
		const errors = [...array];
		this.setState({errors: errors});
	}

	selectArticle = (article) => {
		this.setState({selectedArticle: article});
	}

	updateTimeline = (array) => {
		this.setState({timeline: array});
	}

	getSearchInput = (text) => {
		this.setState({search: `${text}`})
	}

	setFeedHeight() {

		if (this.state.menuIsOpen) {
			let height = this.sectionFilterRow.clientHeight;
			this.twitterfeedDiv.style.paddingTop = `${height}px`;
		}
		else {
			this.twitterfeedDiv.style.paddingTop = "0";
		}	
	}

	selectCategory = (component, checked) => {
		let selectedArray = [...this.state.selectedCategories];
		const id = component.props.category.id;
		const category = component.props.category;
		const index = selectedArray.map((cat)=>{ return cat.id}).indexOf(category.id);
		const isChecked = checked;

		//if in array AND checked is false, splice from array
		if (index !== -1 && isChecked == false) {
			selectedArray.splice(index,1);
		}
		//else if not in array AND checked is true, push into array
		else if (index == -1 && isChecked == true) {
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
		const index = selectedArray.map((src)=>{ return src.id}).indexOf(source.id);
		const isChecked = checked;

		//if in array AND checked is false, splice from array
		if (index !== -1 && isChecked == false) {
			selectedArray.splice(index,1);
		}
		//else if not in array AND checked is true, push into array
		else if (index == -1 && isChecked == true) {
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
		const index = selectedArray.map((lang)=>{ return lang.id}).indexOf(language.id);
		const isChecked = checked;

		//if in array AND checked is false, splice from array
		if (index !== -1 && isChecked == false) {
			selectedArray.splice(index,1);
		}
		//else if not in array AND checked is true, push into array
		else if (index == -1 && isChecked == true) {
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

		window.axios.post('/api/category', {
				categories: categories,
				user: this.state.user
		    })
		    .then(response => {
		      	this.setState({
			      	savedCategories: response.data.categories,
			      	menuIsOpen: menuIsOpen ? false : true })
		    })
		    .catch(error => {
		    	console.log(error);
		    	let errorArray = [...this.state.errors];
		    	errorArray.push('There was a problem saving your preferred categories.');

		    	this.setState({
		    		menuIsOpen: false,
		    		errors: errorArray
		    	});
		    });

		window.axios.post('/api/source', {
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
	      		let errorArray = [...this.state.errors];
	      		errorArray.push('There was a problem saving your preferred sources.');

	      		this.setState({
	      			menuIsOpen: false,
	      			errors: errorArray
	      		});
	      	});

	  window.axios.post('/api/language', {
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
	        let errorArray = [...this.state.errors];
	        errorArray.push('There was a problem saving your preferred languages.');

	        this.setState({
	        	menuIsOpen: false,
	        	errors: errorArray
	        });
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
				// newsSources, 
				newsArticles, 
				user, 
				logoutPage, 
				loginPage, 
				tweetFormOpen, 
				selectedCategories,
				categories,
				savedCategories,
				menuIsOpen,
				twitterFeedOpen,
				toggleTwitterFeed,
				sources,
				selectedSources,
				languages,
				selectedLanguages,
				search,
				errors
				} = this.state;

		if (this.state.newsArticles.length) {
			return (
				<div className={`${user ? 'authenticated' : ''} ${menuIsOpen ? 'menu-open': ''}`}>
					<CSSTransitionGroup
					  className="tweet-modal-wrap"
					  component="div"
					  transitionName={ {
					      enter: 'animated',
					      enterActive: 'fadeIn',
					      leave: 'animated',
					      leaveActive: 'fadeOut',
					    } }
					  transitionEnter={true}
					  transitionEnterTimeout={1000}
					  transitionLeave={true}
					  transitionLeaveTimeout={1000}
					>
					{tweetFormOpen ? <TweetForm 
						tweetFormOpen={tweetFormOpen} 
						toggleTweetForm={this.toggleTweetForm}
						selectedArticle={this.state.selectedArticle}
						user={user}
						timeline={timeline}
						updateTimeline={this.updateTimeline}
						errors={errors}
						updateErrors={this.updateErrors}
					/> : '' }
					</CSSTransitionGroup>

					<CSSTransitionGroup
					  className="errors-modal-wrap"
					  component="div"
					  transitionName={ {
					      enter: 'animated',
					      enterActive: 'fadeIn',
					      leave: 'animated',
					      leaveActive: 'fadeOut',
					    } }
					  transitionEnter={true}
					  transitionEnterTimeout={1000}
					  transitionLeave={true}
					  transitionLeaveTimeout={1000}
					>
					{
						errors.length ? 
							<Errors 
								errors={errors} 
								toggleErrors={this.toggleErrors}
							/> : ''
					}

					</CSSTransitionGroup>

					<header>

						<TopBar user={user} loginPage={loginPage} logoutPage={logoutPage}/>
						
						<div className="section-filter">
							<div className="row" ref={(element) => this.sectionFilterRow = element}>
								<div className="large-8 medium-6 columns">
							        <div className="options-menu" onClick={() => this.setState({menuIsOpen: menuIsOpen ? false : true})}>
							        	<span className="icon-cog">News</span>
							            <span className={ menuIsOpen ? 'icon-up-open-big' : 'icon-down-open-big'}></span>
							        </div>
		          				</div>

			    				<div className="large-4 medium-6 columns">
			    					<div className="twitter-options">
								        <div className="options-menu" onClick={() => this.setState({menuIsOpen: menuIsOpen ? false : true})}>
											<span className="icon-cog">Twitter</span>
											<span className={ menuIsOpen ? 'icon-up-open-big' : 'icon-down-open-big'}></span>
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
									twitterFeedOpen={twitterFeedOpen}
									toggleTwitterFeed={this.toggleTwitterFeed}
									sources={sources}
									selectSource={this.selectSource}
									selectedSources={selectedSources}
									logoutPage={logoutPage}
									loginPage={loginPage}
									languages={languages}
									selectLanguage={this.selectLanguage}
									selectedLanguages={selectedLanguages}
									toggleMenu={this.toggleMenu}
									getSearchInput={this.getSearchInput}
								/>
							</div>
							{
								user ?
								<div className="save" onClick={this.saveData}>
						        	<span className="icon-ok">Save</span>
						      	</div>
						        :
						        	''
							}
						</div>
					</header>

					<div className="feeds">
							<div className="row small-collapse medium-uncollapse large-uncollapse">
								<div className="large-8 medium-6 columns newsfeed">

									<NewsFeed 
										newsArticles={newsArticles} 
										dateFormatter={this.dateFormatter} 
										tweetFormOpen={tweetFormOpen} 
										toggleTweetForm={this.toggleTweetForm}
										selectArticle={this.selectArticle}
										selectedCategories={selectedCategories}
										categories={categories}
										savedCategories={savedCategories}
										selectedLanguages={selectedLanguages}
										selectedSources={selectedSources}
										user={user}
									/>
								</div>
								<div className="large-4 medium-6 columns twitterfeed" ref={(element) => this.twitterfeedDiv = element}>
									<CSSTransitionGroup
									  component="div"
									  className="twitter-container"
									  transitionName={ {
									      enter: 'animated',
									      enterActive: 'slideInRightFadeIn',
									      leave: 'animated',
									      leaveActive: 'slideOutRightFadeOut',
									      appear: 'animated',
									      appearActive: 'slideInRightFadeIn'
									    } }
									  transitionEnter={true}
									  transitionEnterTimeout={1000}
									  transitionLeave={true}
									  transitionLeaveTimeout={1000}
									  transitionAppear={true}
									  transitionAppearTimeout={1000}
									>
									{
										twitterFeedOpen ?
										<div className="twitter-wrap" ref={(element) => this.twitterfeedDiv = element}> 
											<TwitterFeed 
												timeline={timeline}
												user={user}
												search={search} 
											/>
										</div>
										: ''
									}
									</CSSTransitionGroup>

									<CSSTransitionGroup
									  component="div"
									  transitionName={ {
									      enter: 'animated',
									      enterActive: 'fadeIn',
									      leave: 'animated',
									      leaveActive: 'fadeOut',
									      appear: 'animated',
									      appearActive: 'fadeIn'
									    } }
									  transitionEnter={true}
									  transitionEnterTimeout={1000}
									  transitionLeave={true}
									  transitionLeaveTimeout={1000}
									  transitionAppear={true}
									  transitionAppearTimeout={1000}
									>

									{ twitterFeedOpen ? '' : 							
									 	<div className="sign-in-message">
											<div className="row">
												<div className="large-12 columns">
													<h2>
													{user ? <span>Activate </span> : <span>Sign in </span>}
													
													to use this feature</h2>
												</div>
											</div>
										</div> 
									}
									</CSSTransitionGroup>

									
								</div>
							</div>
					</div>
				</div>
			)
		}
		else {
			return <ApiDown/>
		}
	}
}

export default App