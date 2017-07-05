import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';


class TweetForm extends Component {
    constructor(props) {
        super()
        this.maxChars = 117;
        this.state = {
            charsLeft: this.maxChars
        }
    }

    charLimit = (e) => {
        let input = e.target.value;

    //remove username from charlimit
      //   input = input.replace(/[@]+[A-Za-z0-9-_]+/g, function(u) {
      //   var username = u.length;
      //   return username;
      // });

        this.setState({charsLeft: this.maxChars - input.length});
    }

    getTimeline = () => {
      axios.get('/twitter/timeline')
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

        const postTweetBody = document.getElementById('postTweet-body').value;
        const articleUrl = this.props.selectedArticle.url;
        // console.log(postTweetBody, articleUrl);
        console.log(this.props.selectedArticle);

        axios.post('/tweet', {
            tweetBody: postTweetBody,
            tweetUrl: articleUrl
        })
          .then((response) => {
            console.log(response);

            this.getTimeline();
            // let tweets = [...this.props.timeline]; 
            //   const tweet= {
            //     created_at: new Date(),
            //     text: postTweetBody,
            //     user: {
            //       profile_image_url: this.props.user.image,
            //       screen_name: this.props.user.twitter_username,
            //       name: this.props.user.name
            //     }
            //   }

            //   tweets.push(tweet);
              // this.props.updateTimeline(tweets);
          })
          .catch((error) => {
            console.log('error');
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
                              <textarea id="postTweet-body" onChange={this.charLimit} type="text" placeholder="Tweet" rows="3" maxLength={this.maxChars}></textarea>
                          </label>

                          <label>Article URL <small>(uses 23 chars)</small>
                              <input id="postTweet-url" type="text" value={this.props.selectedArticle.url} disabled/>
                          </label>
                      </form>
                      <button className="button" type="button" onClick={(e) =>this.tweetArticle(e)}>Tweet</button> <small>{this.state.charsLeft}</small>
                    </div>
                  </div>
                    
        )
    }
}

export default TweetForm