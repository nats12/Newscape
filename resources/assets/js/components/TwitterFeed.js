import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { CSSTransitionGroup } from 'react-transition-group';

import Tweet from './Tweet';


class TwitterFeed extends Component {
	constructor() {
		super()
	}

	searchFilter = (key) => {
		const tweet = this.props.timeline[key];

		if (this.props.search.length === 0) {
			return this.renderTweet(key)
		}
		else if (this.props.search.length > 0) {
			const searchText = `#${this.props.search}`;
			const regexp = new RegExp(searchText, 'i');
			return tweet.text.search(regexp) >= 0 ? this.renderTweet(key) : '';
		}

	}

	renderTweet = (key) => {
		return (
			<Tweet key={key} tweet={this.props.timeline[key]} />
		)
	}

	render() {
		
		return (
			<div className="row">
				{	
					this.props.timeline && this.props.user ?
						<CSSTransitionGroup
						  component="div"
						  className="twitterfeed"
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
							Object.keys(this.props.timeline)
							.map(key => this.searchFilter(key))
						}
						</CSSTransitionGroup>
					: ''
				}
			</div>
		)
	}
}



export default TwitterFeed