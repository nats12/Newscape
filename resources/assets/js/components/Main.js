import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

import TwitterAuth from './TwitterAuth';
import TwitterFeed from './TwitterFeed';
import TweetForm from './TweetForm';
import NewsSources from './NewsSources';
import NewsFeed from './NewsFeed';
import Categories from './Categories';



class Main extends Component {
    constructor(props) {
        super()
    }

    render() {
        //destructure state object passed as props
        const { 
            timeline, 
            newsSources, 
            newsArticles, 
            user, 
            logoutPage, 
            loginPage, 
            tweetFormOpen,  
            selectedArticle 
        } = this.props.state;

        //destructure props 
        const { dateFormatter, toggleTweetForm, selectArticle} = this.props

        return (
            <div>

                <Link className="button" to={`/preferences`}>Preferences</Link>
                <TwitterAuth 
                    user={user} 
                    loginPage={loginPage} 
                    logoutPage={logoutPage}
                />

                {tweetFormOpen ? <TweetForm 
                    tweetFormOpen={tweetFormOpen} 
                    toggleTweetForm={toggleTweetForm}
                    selectedArticle={selectedArticle}
                /> : '' }
                

                <div className="large-8 columns">
                    <Categories/>
                    <NewsFeed 
                        newsArticles={newsArticles} 
                        dateFormatter={dateFormatter} 
                        tweetFormOpen={tweetFormOpen} 
                        toggleTweetForm={toggleTweetForm}
                        selectArticle={selectArticle}
                    />
                </div>

                {/*
                <div className="large-8 columns">
                    <NewsSources 
                        newsSources={newsSources} />
                </div>
                */}
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

export default Main