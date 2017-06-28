import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class TweetForm extends Component {
    constructor(props) {
        super()
        this.maxChars = 117;
        this.state = {
            charsLeft: this.maxChars
        }
    }

    charLimit = (e) => {
        const input = e.target.value;
        this.setState({charsLeft: this.maxChars - input.length});
        console.log(this.state.charsLeft)
    }

    tweetArticle = (e) => {

        e.preventDefault();

        const postTweetBody = document.getElementById('postTweet-body').value;
        const articleUrl = this.props.selectedArticle.url;
        // console.log(postTweetBody, articleUrl);
        console.log(this.props.selectedArticle);

        // axios.post('/', { firstName: 'Marlon', lastName: 'Bernardes' })
        //   .then((response) => {
        //     console.log('saved successfully')
        //   })
        //   .catch((error) => {
        //     console.log('error');
        //   });
    }

    render() {
        let tweetFormOpen = this.props.tweetFormOpen;
        return (

            <div className="row">
                <div className="large-4 columns">
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
            </div>
        )
    }
}

export default TweetForm