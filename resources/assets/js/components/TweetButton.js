import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class TweetButton extends Component {
    constructor() {
        super()
    }

    openTweetForm = (e) => {
        e.preventDefault();
        console.log("tweeted!");
    };

    render() {
        let tweetFormOpen = this.props.tweetFormOpen;
        return (
            <button type="button" className="button small" onClick={() => {
                this.props.toggleTweetForm(tweetFormOpen);
                this.props.selectArticle(this.props.article);
            }
            }>Tweet</button>
        )
    }
}

export default TweetButton