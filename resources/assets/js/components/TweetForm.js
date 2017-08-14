import React, { Component } from 'react';

class TweetForm extends Component {
    constructor(props) {
        super()
        this.maxChars = 117;
        this.state = {
            charsLeft: this.maxChars,
            tweet: ''
        }
    }

    handleChange = (e) => {
        let input = e.target.value;

        // For future Twitter update - Regex to exclude handle from char limit.
        //   input = input.replace(/[@]+[A-Za-z0-9-_]+/g, function(u) {
        //   var username = u.length;
        //   return username;
        // });

        this.setState({
            charsLeft: this.maxChars - input.length,
            tweet: input
        });
    }

    getTimeline = () => {
        window.axios.get('/twitter/timeline')
            .then(response => {
                console.log(response);
                this.props.updateTimeline(response.data.timeline);
            })
            .catch( error => {
                console.log(error);
            });
    }


    tweetArticle = (e) => {
        e.preventDefault();

        const postTweetBody = this.state.tweet;
        const articleUrl = this.props.selectedArticle.url;

        window.axios.post('/tweet', {
            tweetBody: postTweetBody,
            tweetUrl: articleUrl
        })
            .then((response) => {
                console.log(response);
                this.props.toggleTweetForm(this.props.tweetFormOpen)
                this.getTimeline();
            })
            .catch((error) => {
                this.props.toggleTweetForm(this.props.tweetFormOpen);
                let errorArray = [...this.props.errors];
                errorArray.push('There was a problem posting your tweet.');
                this.props.updateErrors(errorArray);
        });
    }

    render() {
        let tweetFormOpen = this.props.tweetFormOpen;
        
        return (
            <div className="tweet-modal">
              <div className="callout">
                <button className="close-button" aria-label="Close alert" type="button" onClick={() => this.props.toggleTweetForm(tweetFormOpen)}>
                  <span aria-hidden="true">&times;</span>
                </button>
                <form>
                  <h5>Compose Tweet</h5>
                    <label>
                        <textarea id="postTweet-body" onChange={this.handleChange} type="text" placeholder="Tweet" rows="3" maxLength={this.maxChars}></textarea>
                    </label>

                    <label>Article URL <small>(uses 23 chars)</small>
                        <input id="postTweet-url" type="text" value={this.props.selectedArticle.url} disabled/>
                    </label>
                </form>
                <button className="button default" type="button" onClick={(e) =>this.tweetArticle(e)}>Tweet</button> <small>{this.state.charsLeft}</small>
              </div>
            </div>
        )
    }
}

export default TweetForm